<?php


namespace FPBlog\Router;

use Auryn\Injector;

class FoundDispatcher implements RouteDispatcherInterface {

	protected $routeInfo;
	protected $injector;

	public function __construct(array $routeInfo, Injector $injector)
	{
		$this->routeInfo = $routeInfo;
		$this->injector = $injector;
	}

	public function dispatch(): void
	{
		$className = $this->routeInfo[1][0];
		$method = $this->routeInfo[1][1];
		$vars = $this->routeInfo[2];
		$class = $this->injector->make($className);
		$class->$method($vars);
	}
}
