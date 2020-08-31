<?php


namespace App\Repositories;


use App\Item;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemsRepository
 * @package App\Repositories
 */
class ItemsRepository implements RepositoryInterface
{

    /**
     * @return Item[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Item::all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Item::create($data);
    }

    /**
     * @param Model $resource
     * @param array $data
     * @return mixed
     */
    public function update(Model $resource, array $data)
    {
        return $resource->update($data);
    }

    /**
     * @param Model $resource
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Model $resource)
    {
        return $resource->delete();
    }
}
