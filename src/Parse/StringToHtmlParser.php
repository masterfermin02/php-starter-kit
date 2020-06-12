<?php


namespace App\Parse;


class StringToHtmlParser implements Parser
{

    public function parse(string $content): string
    {
        return html_entity_decode($content);
    }

}
