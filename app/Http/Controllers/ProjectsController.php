<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\ProjetcsService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    private ProjetcsService $projectsService;

    /**
     * ProjectsController constructor.
     * @param ProjetcsService $projectsService
     */
    public function __construct(ProjetcsService $projectsService)
    {
        $this->projectsService = $projectsService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = $this->projectsService->all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('projects.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        $data = $request->except([
            '_token'
        ]);

        $data['user_id'] = Auth::id();

        $this->projectsService->create($data);

        return redirect()->back()->with('success', 'Projeto criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param Project $projects
     * @return Response
     */
    public function show(Project $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Application|Factory|View
     */
    public function edit(Project $project)
    {
        return view('projects.form', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ]);

        $this->projectsService->update($project, $request->except([
            '_token'
        ]));

        return redirect()->back()->with('success', 'Projeto editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Project $project)
    {
        $deleted = $project->delete();

        return redirect()->back()->with('success', 'Projeto deletado com sucesso');
    }
}
