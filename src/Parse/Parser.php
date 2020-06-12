<?php declare(strict_types = 1);

namespace App\Parse;

interface Parser
{
    public function parse(string $content);
}
