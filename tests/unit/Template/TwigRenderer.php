<?php


class TwigRenderer
{
    public function testCanRender(): void
    {
        $renderer = $this->createMock(\Twig\Environment::class);
        $renderer->expects($this->once())
            ->method('render')
            ->with('Hello', [])
            ->willReturn('Hello');
        $twigRenderer = new \FPBlog\Template\TwigRenderer($renderer);

        $this->assertSame('Hello', $twigRenderer->render('Hello', []));
    }
}
