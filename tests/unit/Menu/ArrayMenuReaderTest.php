<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use FPBlog\Menu\ArrayMenuReader;
use FPBlog\Menu\MenuReader;

class ArrayMenuReaderTest extends TestCase
{
    public function testCanReadMenu(): void
    {
        $experted = ['href' => '/', 'text' => 'Homepage'];

        $menu = new ArrayMenuReader();

        $this->assertSame($experted, $menu->readMenu()[0]);
    }

    public function testArrayMenuReaderImplementMenuReader(): void
    {
        $this->assertInstanceOf(MenuReader::class, new ArrayMenuReader());
    }


}
