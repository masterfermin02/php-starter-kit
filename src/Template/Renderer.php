<?php


namespace FPBlog\Template;


interface Renderer
{
	public function render($template, $data = []) : string;
}
