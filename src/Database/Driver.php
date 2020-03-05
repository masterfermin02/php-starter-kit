<?php


namespace FPBlog\Database;


interface Driver
{
    public function create(): void;
    public function update(): void;
    public function delete(): void;
    public function gets(Filter $query): void;
}
