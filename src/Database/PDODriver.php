<?php


namespace FPBlog\Database;


use PDO;

class PDODriver implements Driver
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(): void
    {
        // TODO: Implement create() method.
    }

    public function update(): void
    {
        // TODO: Implement update() method.
    }

    public function delete(): void
    {
        // TODO: Implement delete() method.
    }

    public function gets(Filter $query): void
    {
        // TODO: Implement gets() method.
    }
}
