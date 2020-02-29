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

return $injector;
