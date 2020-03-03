<?php declare( strict_types=1 );

namespace FPBlog\Menu;


class ArrayMenuReader implements MenuReader
{


	public function readMenu(): array
	{
		return [
			['href' => '/', 'text' => 'Homepage'],
			['href' => '/page-one', 'text' => 'Page One'],
			['href' => '/page-two', 'text' => 'Page Two'],
		];
	}
}
