<?php declare(strict_types = 1);

namespace FPBlog\Controllers;

use FPBlog\Template\FrontendRenderer;
use Http\Request;
use Http\Response;

class Homepage {

	protected $request;
	protected $response;
	protected $renderer;

	public function __construct(Request $request, Response $response, FrontendRenderer $renderer)
	{
		$this->request  = $request;
		$this->response = $response;
		$this->renderer = $renderer;
	}

	public function show()
	{
		$data = [
			'name' => $this->request->getParameter('name', 'stranger'),
		];
		$html = $this->renderer->render('Homepage', $data);
		$this->response->setContent($html);
	}
}
