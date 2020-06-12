<?php declare(strict_types = 1);

namespace App;

use App\Router\ArrayRouterReader;


require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

$injector = include('Dependencies.php');

$request = $injector->make('Http\HttpRequest');
$response = $injector->make('Http\HttpResponse');

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
$arrayRoutetReader = new ArrayRouterReader();
$dispatcher = \FastRoute\simpleDispatcher (function (\FastRoute\RouteCollector $r) use ($arrayRoutetReader) {
	$routes = $arrayRoutetReader->readeRoute();
	$addRoute = function ($route) use ($r) {
		list($method, $uri, $handle) = $route;
		$r->addRoute($method, $uri, $handle);
	};
	array_walk($routes, $addRoute);
});

$routeInfo = $dispatcher->dispatch($request->getMethod(), $request->getPath());
$injector->define('App\Router\FoundDispatcher', [
	':routeInfo' => $routeInfo,
	':injector' => $injector,
]);
$injector->define('App\Router\RouterDispatcher', [
	':routeInfo' => $routeInfo,
	':injector' => $injector,
]);
$injector->make('App\Router\RouterDispatcher')->dispatch();

foreach ($response->getHeaders() as $header) {
	header($header, false);
}

echo $response->getContent();
