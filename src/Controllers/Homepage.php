<?php


namespace FPBlog\Controllers;


use Http\Response;

class Homepage {

	protected $response;

	public function __construct(Response $response)
	{
		$this->response = $response;
	}

	public function show()
	{
		$this->response->setContent('Hello World fermin');
	}
}
