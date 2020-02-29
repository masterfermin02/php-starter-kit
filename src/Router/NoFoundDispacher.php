<?php


namespace FPBlog\Router;

use \Http\HttpResponse;

class NoFoundDispacher implements RouteDispacherInterface {

	protected $response;

	public function __construct(HttpResponse $response)
	{
		$this->response = $response;
	}

	public function dispach(): void
	{
		// TODO: Implement dispach() method.
		$this->response->setContent('404 - Page not found');
		$this->response->setStatusCode(404);
	}
}