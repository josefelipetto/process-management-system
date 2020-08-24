<?php

namespace App\Repositories;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectsRepository implements RepositoryInterface
{

    public function all()
    {
        return Project::all();
    }

    public function create(array $data)
    {
        return Project::create($data);
    }

    public function update(Model $resource, array $data)
    {
        Project::find($resource->id)
            ->update($data);
    }

}
