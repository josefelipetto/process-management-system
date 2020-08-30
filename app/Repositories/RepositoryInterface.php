<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(Model $resource, array $data);

    public function delete(Model $resource);
}
