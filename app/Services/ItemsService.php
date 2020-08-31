<?php

namespace App\Services;

use App\Repositories\ItemsRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemsService
 * @package App\Services
 */
class ItemsService implements ServiceInterface
{
    /**
     * @var ItemsRepository
     */
    private ItemsRepository $itemsRepository;

    /**
     * ItemsService constructor.
     * @param ItemsRepository $itemsRepository
     */
    public function __construct(ItemsRepository $itemsRepository)
    {
        $this->itemsRepository = $itemsRepository;
    }


    /**
     *
     */
    public function all()
    {
        return $this->itemsRepository->all();
    }

    /**
     * @param array $data
     */
    public function create(array $data)
    {
        return $this->itemsRepository->create($data);
    }

    /**
     * @param Model $resource
     * @param array $data
     */
    public function update(Model $resource, array $data)
    {
        return $this->itemsRepository->update($resource, $data);
    }

    /**
     * @param Model $model
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Model $model)
    {
        return $this->itemsRepository->delete($model);
    }
}
