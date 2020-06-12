<?php declare(strict_types = 1);

namespace App\Template;

use Twig\Environment;

class TwigRenderer implements Renderer
{
	protected $renderer;

	public function __construct(Environment $renderer)
	{
		$this->renderer = $renderer;
	}

	public function render($template, $data = []) : string
	{
		return $this->renderer->render("$template.html", $data);
	}

}
