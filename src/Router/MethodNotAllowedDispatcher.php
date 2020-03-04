<?php


namespace FPBlog\Router;

use Http\HttpResponse;

class MethodNotAllowedDispatcher implements RouteDispatcherInterface {

	protected $response;

	public function __construct(HttpResponse $response)
	{
		$this->response = $response;
	}

	public function dispatch(): void
	{
		// TODO: Implement dispach() method.
		$this->response->setContent('405 - Method not allowed');
		$this->response->setStatusCode(405);
	}
}
