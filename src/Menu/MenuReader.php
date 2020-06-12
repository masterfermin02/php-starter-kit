<?php declare( strict_types=1 );

namespace App\Menu;


interface MenuReader
{
	public function readMenu(): array;
}
