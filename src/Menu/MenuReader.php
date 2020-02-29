<?php declare( strict_types=1 );

namespace FPBlog\Menu;


interface MenuReader
{
	public function readMenu() : array;
}