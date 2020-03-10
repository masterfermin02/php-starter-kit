<?php


namespace FPBlog\Database;


class DB
{
    protected $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function create()
    {

    }

}
