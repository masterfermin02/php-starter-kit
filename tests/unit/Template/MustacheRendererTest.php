<?php


use PHPUnit\Framework\TestCase;

class MustacheRendererTest extends TestCase
{
    public function testCanRender(): void
    {
        $renderer = $this->createMock(Mustache_Engine::class);
        $renderer->expects($this->once())
            ->method('render')
            ->with('Hello', [])
            ->willReturn('Hello');
        $mustacheRenderer = new \FPBlog\Template\MustacheRenderer($renderer);

        $this->assertSame('Hello', $mustacheRenderer->render('Hello', []));
    }
}
