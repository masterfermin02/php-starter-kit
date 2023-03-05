<?php declare(strict_types = 1);

use Twig\Extra\Markdown\DefaultMarkdown;
use Twig\Extra\Markdown\MarkdownExtension;
use Twig\Extra\Markdown\MarkdownRuntime;
use Twig\RuntimeLoader\RuntimeLoaderInterface;

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
	':getParameters' => $_GET,
	':postParameters' => $_POST,
	':cookies' => $_COOKIE,
	':files' => $_FILES,
	':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('App\Router\RouteDispatcherInterface', 'App\Router\RouteDispatcherInterface');
$injector->share('App\Router\RouteDispatcherInterface');

$injector->define('Mustache_Engine', [
	':options' => [
		'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
			'extension' => '.html',
		]),
	],
]);

$injector->define('App\File\FileReader', [
	':folder' => __DIR__ . '/../',
]);

$injector->delegate('Twig\Environment', function () use ($injector) {
	$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/templates');
	$twig = new \Twig\Environment($loader);
	$twig->addExtension(new MarkdownExtension());
	$twig->addRuntimeLoader(new class implements RuntimeLoaderInterface {
		public function load($class) {
			if (MarkdownRuntime::class === $class) {
				return new MarkdownRuntime(new DefaultMarkdown());
			}
		}
	});
	return $twig;
});

$injector->alias('App\Page\PageReader', 'App\Page\FilePageReader');
$injector->share('App\Page\FilePageReader');

$injector->alias('App\Template\Renderer', 'App\Template\TwigRenderer');
$injector->alias('App\Template\FrontendRenderer', 'App\Template\FrontendTwigRenderer');

$injector->alias('App\Menu\MenuReader', 'App\Menu\ArrayMenuReader');
$injector->share('App\Menu\ArrayMenuReader');

$injector->alias( 'App\Router\RouterReader', 'App\Router\ArrayRouterReader' );
$injector->share( 'App\Router\ArrayRouterReader' );

$injector->share('Parsedown');

$injector->alias( 'App\Parse\Parser', 'App\Parse\MarkDownToHtmlParser' );
$injector->share( 'App\Parse\MarkDownToHtmlParser' );

$injector->define('PDO', [
    ':dns' => 'mysql:host=mysql;dbname=fp_blog',
    ':user' => 'app',
    ':passwd' => 'password',
]);

$injector->alias( 'FPBlog\Database\Driver', 'FPBlog\Database\PDODRiver' );
$injector->share( 'FPBlog\Database\PDODriver' );

return $injector;
