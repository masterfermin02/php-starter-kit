<?php


use PHPUnit\Framework\TestCase;

class FrontendTwigRendererTest extends TestCase
{
    public function testCanRender(): void
    {
	    $request = $this->createMock(\Http\Request::class);
	    $request->method('getUri')
	            ->with()
	            ->willReturn('/');
        $menuItem = new \App\Menu\ArrayMenuReader($request);
        $renderer = $this->createMock(\App\Template\TwigRenderer::class);
        $renderer->expects($this->once())
        ->method('render')
        ->with('Hello', [ 'menuItems' => $menuItem->readMenu()])
        ->willReturn('Hello');
        $frontendTwigRenderer = new \App\Template\FrontendTwigRenderer($renderer, $menuItem);

        $this->assertSame('Hello', $frontendTwigRenderer->render('Hello', []));
    }
}
