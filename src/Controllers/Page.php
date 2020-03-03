<?php declare( strict_types=1 );


namespace FPBlog\Controllers;

use FPBlog\Page\InvalidPageException;
use FPBlog\Page\PageReader;
use FPBlog\Parse\MarkDownToHtmlParser;
use FPBlog\Parse\Parser;
use FPBlog\Template\FrontendRenderer;
use Http\Response;

class Page
{
	private $response;
	private $renderer;
	private $pageReader;
	private $parser;

	public function __construct(
		Response $response,
		FrontendRenderer $renderer,
		PageReader $pageReader,
        Parser $parser
	) {
		$this->response   = $response;
		$this->renderer   = $renderer;
		$this->pageReader = $pageReader;
		$this->parser     = $parser;
	}

	public function show($params)
	{
		$slug = $params['slug'];

		try {
			$data['content'] = $this->pageReader->readBySlug($slug);
		} catch (InvalidPageException $e) {
			$this->response->setStatusCode(404);
			return $this->response->setContent('404 - Page not found');
		}

		$html = $this->parser->parse($this->renderer->render('Page', $data));
		$this->response->setContent($html);
	}
}
