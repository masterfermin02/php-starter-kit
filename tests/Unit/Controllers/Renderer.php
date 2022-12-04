<?php

namespace App\Tests\Unit\Controllers;

class Renderer implements \App\Template\FrontendRenderer
{

    public function render($template, $data = []): string
    {
        return 'testTemplate';
    }
}
