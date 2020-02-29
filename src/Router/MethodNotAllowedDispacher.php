<?php


namespace FPBlog\Router;

use \Http\HttpResponse;

class MethodNotAllowedDispacher implements RouteDispacherInterface {

	protected $response;

	public function __construct(HttpResponse $response)
	{
		$this->response = $response;
	}

	public function dispach(): void
	{
		// TODO: Implement dispach() method.
		$this->response->setContent('405 - Method not allowed');
		$this->response->setStatusCode(405);
	}
}
