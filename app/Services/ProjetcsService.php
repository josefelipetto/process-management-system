<?php

namespace App\Services;

use App\Repositories\ProjectsRepository;

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
}
