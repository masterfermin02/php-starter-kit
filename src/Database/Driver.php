<?php


namespace FPBlog\Database;


use FPBlog\Models\Model;

interface Driver
{
    public function create(Model $model): void;
    public function update(Model $model): void;
    public function delete(Model $model): void;
    public function get(Query $query): Model;
    public function gets(Filter $query): Collection;
}
