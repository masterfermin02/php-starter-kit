<?php


namespace App\Template;


interface Renderer
{
	public function render($template, $data = []) : string;
}
