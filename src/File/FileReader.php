<?php declare(strict_types = 1);

namespace App\File;

class FileReader implements Reader
{
	public function __construct (
       public readonly string $folder
    ){
	}

	public function fileExists (string $path): bool
	{
		return file_exists("$this->folder/$path");
	}

	public function read( string $name ): string
	{
		return file_get_contents("$this->folder/$name");
	}
}
