<?php

namespace App\Repositories;

use App\Projects;

class ProjectsRepository implements RepositoryInterface
{

    public function all()
    {
        return Projects::all();
    }

}
