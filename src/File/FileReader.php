<?php declare(strict_types = 1);

namespace FPBlog\File;

class FileReader implements Reader
{
	protected $folder;

	public function __construct (string $folder)
	{
		$this->folder = $folder;
	}

	public function fileExists (string $path): bool
	{
		return file_exists("$this->folder/$path");
	}

	public function read( string $path ): string
	{
		return file_get_contents("$this->folder/$path");
	}
}
