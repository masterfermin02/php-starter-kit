<?php declare(strict_types = 1);

namespace FPBlog\Parse;

interface Parser
{
    public function parse(string $content);
}
