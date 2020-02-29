<?php declare(strict_types = 1);

namespace FPBlog;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

$injector = include('Dependencies.php');

$request = $injector->make('Http\HttpRequest');
  = $injector->make('Http\HttpResponse');

/**
 * Register the error handler
 */
$whoops = new \Whoops\Run;
if ($environment !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e){
        echo 'Todo: Friendly error page and send an email to the developer';
    });
}
$whoops->register();

//throw new \Exception;

$dispatcher = \FastRoute\simpleDispatcher(function (\FastRoute\RouteCollector $r) {
	$routes = include('Routes.php');
	$addRoute = function ($route) use ($r) {
		list($method, $uri, $handle) = $route;
		$r->addRoute($method, $uri, $handle);
	};
	array_walk($routes, $addRoute);
});

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPath());
$injector->define('FPBlog\Router\FoundDispacher', [
	':routeInfo' => $routeInfo,
	':injector' => $injector,
]);
$injector->define('FPBlog\Router\Dispacher', [
	':routeInfo' => $routeInfo,
	':injector' => $injector,
]);
$injector->make('FPBlog\Router\Dispacher')->dispach();

foreach ($response->getHeaders() as $header) {
	header($header, false);
}

echo $response->getContent();