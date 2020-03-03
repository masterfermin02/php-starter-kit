<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
	':get' => $_GET,
	':post' => $_POST,
	':cookies' => $_COOKIE,
	':files' => $_FILES,
	':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('FPBlog\Router\RouteDispacherInterface', 'FPBlog\Router\RouteDispacherInterface');
$injector->share('FPBlog\Router\RouteDispacherInterface');

$injector->define('Mustache_Engine', [
	':options' => [
		'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
			'extension' => '.html',
		]),
	],
]);

$injector->define('FPBlog\File\FileReader', [
	':folder' => __DIR__ . '/../',
]);

$injector->delegate('Twig\Environment', function () use ($injector) {
	$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
	$twig = new \Twig\Environment($loader);
	return $twig;
});

$injector->alias('FPBlog\Page\PageReader', 'FPBlog\Page\FilePageReader');
$injector->share('FPBlog\Page\FilePageReader');

$injector->alias('FPBlog\Template\Renderer', 'FPBlog\Template\TwigRenderer');

$injector->alias('FPBlog\Template\FrontendRenderer', 'FPBlog\Template\FrontendTwigRenderer');

$injector->alias('FPBlog\Menu\MenuReader', 'FPBlog\Menu\ArrayMenuReader');
$injector->share('FPBlog\Menu\ArrayMenuReader');

$injector->alias( 'FPBlog\Router\RouterReader', 'FPBlog\Router\ArrayRouterReader' );
$injector->share( 'FPBlog\Router\ArrayRouterReader' );

return $injector;
