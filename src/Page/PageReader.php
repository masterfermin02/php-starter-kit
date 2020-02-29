<?php declare(strict_types = 1);


namespace FPBlog\Page;


interface PageReader
{
	public function readBySlug(string $slug) : string;
}
