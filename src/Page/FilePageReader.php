<?php declare(strict_types = 1);

namespace FPBlog\Page;

use FPBlog\File\FileReader;

class FilePageReader implements PageReader
{
	protected $fileReader;
	protected $parsedown;

	public function __construct(FileReader $fileReader, \Parsedown $parsedown)
	{
		$this->fileReader = $fileReader;
		$this->parsedown = $parsedown;
	}

	public function readBySlug(string $slug) : string
	{
		$path = "pages/$slug.md";

		if (!$this->fileReader->fileExists($path)) {
			throw new InvalidPageException($slug);
		}

		return $this->parsedown->text($this->fileReader->read($path));
	}

}
