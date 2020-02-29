<?php declare(strict_types = 1);

namespace FPBlog\Template;

use FPBlog\Menu\MenuReader;

class FrontendTwigRenderer implements FrontendRenderer
{
	protected $renderer;
	protected $menuReader;

	public function __construct(Renderer $renderer, MenuReader $menuReader)
	{
		$this->renderer = $renderer;
		$this->menuReader = $menuReader;
	}

	public function render($template, $data = []) : string
	{
		$data = array_merge($data, [
			'menuItems' => $this->menuReader->readMenu(),
		]);
		return $this->renderer->render($template, $data);
	}

}
