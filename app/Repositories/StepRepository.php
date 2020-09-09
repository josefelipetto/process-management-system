<?php


namespace App\Repositories;


use App\Step;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StepRepository
 * @package App\Repositories
 */
class StepRepository implements RepositoryInterface
{
    /**
     * @return Step[]|Collection
     */
    public function all()
    {
        return Step::all();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return Step::create($data);
    }

    /**
     * @param Model $resource
     * @param array $data
     * @return bool
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
