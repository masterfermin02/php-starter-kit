<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Menu\ArrayMenuReader;
use App\Menu\MenuReader;

class ArrayMenuReaderTest extends TestCase
{
	protected $menu;

	public function setUp(): void 
	{
		parent::setUp(); // TODO: Change the autogenerated stub
		$request = $this->createMock(\Http\Request::class);
		$request->method('getUri')
				->with()
		        ->willReturn('/');
		$this->menu = new ArrayMenuReader($request);
	}

	public function testCanReadMenu(): void
    {
        $experted = ['href' => '/', 'text' => 'Home', 'class' => 'nav-link active'];


        $this->assertSame($experted, $this->menu->readMenu()[0]);
    }

    public function testArrayMenuReaderImplementMenuReader(): void
    {
        $this->assertInstanceOf(MenuReader::class, $this->menu);
    }
}
