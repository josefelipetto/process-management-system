<?php

namespace App\Services;

use App\Item;
use App\PreviousSteps;
use App\Repositories\ItemsRepository;
use App\Step;
use App\StepsMap;
use Exception;
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
     * @var Stepservice
     */
    private Stepservice $stepService;

    /**
     * ItemsService constructor.
     * @param ItemsRepository $itemsRepository
     * @param Stepservice $stepService
     */
    public function __construct(ItemsRepository $itemsRepository, Stepservice $stepService)
    {
        $this->itemsRepository = $itemsRepository;
        $this->stepService = $stepService;
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
     * @return Item
     */
    public function create(array $data): Item
    {
        /* @var Item $item */
        $item = $this->itemsRepository->create($data);

        foreach (StepsMap::all() as $stepMap) {
            $this->stepService->create([
                'item_id' => $item->id,
                'step_map_id' => $stepMap->id,
                'status' => false
            ]);
        }

        $this->stepService->setupWorkflow($item);

        return $item;
    }


    /**
     * @param Model $resource
     * @param array $data
     * @return mixed
     */
    public function update(Model $resource, array $data)
    {
        return $this->itemsRepository->update($resource, $data);
    }

    /**
     * @param Model $model
     * @return bool|null
     * @throws Exception
     */
    public function delete(Model $model): ?bool
    {
        return $this->itemsRepository->delete($model);
    }
}
