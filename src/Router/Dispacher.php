<?php declare(strict_types = 1);


namespace FPBlog\Router;

use \FastRoute\Dispatcher;
use \Auryn\Injector;


class Dispacher implements RouteDispacherInterface {

	protected $dispachers = [
		Dispatcher::NOT_FOUND          => NoFoundDispacher::class,
		Dispatcher::METHOD_NOT_ALLOWED => MethodNotAllowedDispacher::class,
		Dispatcher::FOUND              => FoundDispacher::class,
	];

	protected $dispachIndex;
	protected $routeInfo;
	protected $injector;

	public function __construct(array $routeInfo, Injector $injector)
	{
		$this->dispachIndex = $routeInfo[0];
		$this->routeInfo    = $routeInfo;
		$this->injector     = $injector;
	}

	public function dispach(): void
	{
		// TODO: Implement dispach() method.
		$this->injector->make($this->dispachers[$this->dispachIndex])->dispach();
	}

}
