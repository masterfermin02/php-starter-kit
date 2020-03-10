<?php


namespace FPBlog\Database;


use FPBlog\Models\Model;
use PDO;

class PDODriver implements Driver
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(Model $model): void
    {
        // TODO: Implement create() method.
    }

    public function update(Model $model): void
    {
        // TODO: Implement update() method.
    }

    public function delete(Model $model): void
    {
        // TODO: Implement delete() method.
    }

    public function get(Query $model): Model
    {

    }

    public function gets(Filter $query): Collection
    {
        // TODO: Implement gets() method.
    }
}
