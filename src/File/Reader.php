<?php declare(strict_types = 1);

namespace FPBlog\File;

interface Reader {
	public function read(string $name) : string;
}