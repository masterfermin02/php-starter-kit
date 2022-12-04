<?php

namespace App\Tests\Unit\Controllers;

use PHPUnit\Framework\TestCase;

class HomepageTest extends TestCase
{
    public function testShow(): void
    {
        $controller = new \App\Controllers\Homepage(
            new Request(),
            new Response(),
            new Renderer()
        );

        $controller->show();

        $this->assertTrue(true);
    }
}
