<?php declare( strict_types=1 );


namespace App\Controllers;

use App\Page\InvalidPageException;
use App\Page\PageReader;
use App\Template\FrontendRenderer;
use Http\Response;

class Page
{
	public function __construct(
        public readonly Response $response,
        public readonly FrontendRenderer $renderer,
        public readonly PageReader $pageReader
	) {
	}

	public function show($params): void
	{
		$slug = $params['slug'];

		try {
			$data['content'] = $this->pageReader->readBySlug($slug);
		} catch (InvalidPageException $e) {
			$this->response->setStatusCode(404);
			$this->response->setContent('404 - Page not found');
            return;
		}

		$html = $this->renderer->render('Page', $data);
		$this->response->setContent($html);
	}
}
