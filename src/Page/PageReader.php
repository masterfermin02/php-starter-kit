<?php declare(strict_types = 1);

namespace App\Page;

interface PageReader
{
	public function readBySlug(string $slug) : string;
}
