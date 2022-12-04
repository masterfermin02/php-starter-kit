<?php declare(strict_types = 1);

namespace App\Page;

use App\File\FileReader;

class FilePageReader implements PageReader
{
	protected $fileReader;

	public function __construct(FileReader $fileReader)
	{
		$this->fileReader = $fileReader;
	}

    /**
     * @throws InvalidPageException
     */
    public function readBySlug(string $slug) : string
	{
		$path = "pages/$slug.md";

		if (!$this->fileReader->fileExists($path)) {
			throw new InvalidPageException($slug);
		}

		return $this->fileReader->read($path);
	}
}
