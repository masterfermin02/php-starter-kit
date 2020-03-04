<?php


namespace FPBlog\Router;

use \Http\HttpResponse;

class NoFoundDispatcher implements RouteDispatcherInterface {

	protected $response;

	public function __construct(HttpResponse $response)
	{
		$this->response = $response;
	}

	public function dispatch(): void
	{
		// TODO: Implement dispach() method.
		$this->response->setContent('404 - Page not found');
		$this->response->setStatusCode(404);
	}
}
