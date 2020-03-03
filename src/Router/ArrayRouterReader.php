<?php declare(strict_types = 1);

namespace FPBlog\Router;

class ArrayRouterReader implements RouterReader
{

	public function readeRoute(): array
	{
		return [
			['GET', '/', ['FPBlog\Controllers\Homepage', 'show']],
			['GET', '/{slug}', ['FPBlog\Controllers\Page', 'show']],
		];
	}
}
