<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;

interface ServiceInterface
{
    public function all();

    public function create(array $data);

    public function update(Model $resource, array $data);

    public function delete(Model $model);
}
