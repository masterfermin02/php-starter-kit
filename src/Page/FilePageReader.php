<?php


namespace FPBlog\Page;

class FilePageReader implements PageReader
{
	protected $pageFolder;

	public function __construct(string $pageFolder)
	{
		$this->pageFolder = $pageFolder;
	}

	public function readBySlug(string $slug) : string
	{
		$path = "$this->pageFolder/$slug.md";

		if (!file_exists($path)) {
			throw new InvalidPageException($slug);
		}

		return file_get_contents($path);
	}

}
