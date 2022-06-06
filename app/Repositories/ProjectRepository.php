<?php

namespace App\Repositories;
use App\Interfaces\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{

    public function all()
    {

       return Project::all();

    }
    public function create($data)
    {
        Project::create($data);
    }

    public function find($id)
    {
        $projects = Project::find($id);
        return  $projects;

    }
     public function update($id,$data)
    {
        $input = $data->all();
        $project = Project::find($id);
        $project->fill($input)->save();

    }
    public function delete($id)
    {
      return Project::find($id)->delete();
    }

}




?>
