<?php declare(strict_types = 1);

namespace FPBlog\Parse;

class MarkDownToHtmlParser implements Parser
{
    protected $parsedown;
    protected $stringToHtmlParser;

    public function __construct(\Parsedown $parsedown, StringToHtmlParser $stringToHtmlParser)
    {
        $this->parsedown = $parsedown;
        $this->stringToHtmlParser = $stringToHtmlParser;
    }

    public function parse( string $content )
    {
        return $this->parsedown->text($content);
    }

}
