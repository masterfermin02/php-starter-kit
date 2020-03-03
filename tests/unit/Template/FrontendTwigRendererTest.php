<?php


use PHPUnit\Framework\TestCase;

class FrontendTwigRendererTest extends TestCase
{
    public function testCanRender(): void
    {
        $menuItem = new \FPBlog\Menu\ArrayMenuReader();
        $renderer = $this->createMock(\FPBlog\Template\TwigRenderer::class);
        $renderer->expects($this->once())
        ->method('render')
        ->with('Hello', [ 'menuItems' => $menuItem->readMenu()])
        ->willReturn('Hello');
        $frontendTwigRenderer = new \FPBlog\Template\FrontendTwigRenderer($renderer, $menuItem);

        $this->assertSame('Hello', $frontendTwigRenderer->render('Hello', []));
    }
}
