<?php

namespace App\Http\Controllers;

use App\Interfaces\ProjectRepositoryInterface;
use App\Repositories\ProjectRepository;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ValidationProject;

class ProjectController extends Controller
{

    protected $projectRepo;

    public function __construct(ProjectRepositoryInterface $project)

    {   $this->middleware('auth');
        $this->projectRepo = $project;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project.index',['projects' => $this->projectRepo ->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationProject $request)
    {
        $data = $request->validated();
        $this->projectRepo->create($data);
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('project.show', ['projects' =>$this->projectRepo->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('project.edit',['projects'=>$this->projectRepo->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'project_title' => '',
            'project_name'=>'',
            'phone'=>'',
            'email'=>'',
            'description'=>'',


        ]);
           $this->projectRepo->update($id, $request);
           return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->projectRepo->delete($id);
        return redirect()->route('projects.index');
    }
}
