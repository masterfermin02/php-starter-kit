<?php declare(strict_types = 1);

namespace App\File;

interface Reader {
	public function read(string $name) : string;
}
