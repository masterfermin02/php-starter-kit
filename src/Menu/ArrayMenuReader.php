<?php declare( strict_types=1 );

namespace App\Menu;


use Http\Request;

class ArrayMenuReader implements MenuReader
{
	protected $menu;
	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
		$this->menu    = $this->map();
	}

	public function readMenu(): array
	{
		return $this->menu;
	}

	private function map()
	{
		return array_map(function($item) {
			return [
				'href' => $item['href'],
				'text' => $item['text'],
				'class' => 'nav-link ' . ($item['href'] == $this->request->getUri() ? 'active' : ''),
			];
		}, [
			['href' => '/', 'text' => 'Home'],
			['href' => '/page-one', 'text' => 'Page One'],
			['href' => '/page-two', 'text' => 'Page Two'],
		]);
	}
}
