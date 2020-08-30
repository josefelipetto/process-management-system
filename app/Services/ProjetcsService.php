<?php

namespace App\Services;

use App\Project;
use App\Repositories\ProjectsRepository;
use Illuminate\Database\Eloquent\Model;

class ProjetcsService implements ServiceInterface
{
    private ProjectsRepository $projectsRepository;

    public function __construct(ProjectsRepository $projectsRepository)
    {
        $this->projectsRepository = $projectsRepository;
    }

    public function all()
    {
        return $this->projectsRepository->all();
    }

    public function create(array $data)
    {
        return $this->projectsRepository->create($data);
    }

    public function update(Model $resource, array $data)
    {
        $this->projectsRepository->update($resource, $data);
    }

    public function delete(Model $model)
    {
        $this->projectsRepository->delete($model);
    }
}
