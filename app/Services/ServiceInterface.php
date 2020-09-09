<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;

interface ServiceInterface
{
    public function all();

    public function create(array $data);

    public function update(Model $resource, $data);

    public function delete(Model $model);
}
