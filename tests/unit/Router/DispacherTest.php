<?php

use FastRoute\Dispatcher;
use FPBlog\Router\FoundDispatcher;
use FPBlog\Router\MethodNotAllowedDispatcher;
use FPBlog\Router\NoFoundDispatcher;
use PHPUnit\Framework\TestCase;

class DispacherTest extends TestCase
{
    public function testNoFoundDispatch()
    {

        $noFoundMock = $this->createMock(NoFoundDispatcher::class);
        $noFoundMock->expects($this->once())
            ->method('dispatch')
            ->with();

        $injector = $this->createMock(\Auryn\Injector::class);
        $injector->expects($this->once())
            ->method('make')
            ->with(NoFoundDispatcher::class)
            ->willReturn($noFoundMock);
        $routerInfor = [Dispatcher::NOT_FOUND];
        $dispacher = new \FPBlog\Router\RouterDispatcher($routerInfor, $injector);
        $dispacher->dispatch();
    }

    public function testFoundDispatch()
    {

        $foundMock = $this->createMock(FoundDispatcher::class);
        $foundMock->expects($this->once())
            ->method('dispatch')
            ->with();

        $injector = $this->createMock(\Auryn\Injector::class);
        $injector->expects($this->once())
            ->method('make')
            ->with(FoundDispatcher::class)
            ->willReturn($foundMock);
        $routerInfor = [Dispatcher::FOUND];
        $dispacher = new \FPBlog\Router\RouterDispatcher($routerInfor, $injector);
        $dispacher->dispatch();
    }

    public function testMethodNotAllowedDispatch()
    {

        $foundMock = $this->createMock(MethodNotAllowedDispatcher::class);
        $foundMock->expects($this->once())
            ->method('dispatch')
            ->with();

        $injector = $this->createMock(\Auryn\Injector::class);
        $injector->expects($this->once())
            ->method('make')
            ->with(MethodNotAllowedDispatcher::class)
            ->willReturn($foundMock);
        $routerInfor = [Dispatcher::METHOD_NOT_ALLOWED];
        $dispacher = new \FPBlog\Router\RouterDispatcher($routerInfor, $injector);
        $dispacher->dispatch();
    }
}
