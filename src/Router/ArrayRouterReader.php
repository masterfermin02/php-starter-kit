<?php declare(strict_types = 1);

namespace App\Router;

class ArrayRouterReader implements RouterReader
{

	public function readeRoute(): array
	{
		return [
			['GET', '/', ['App\Controllers\Homepage', 'show']],
			['GET', '/{slug}', ['App\Controllers\Page', 'show']],
		];
	}
}
