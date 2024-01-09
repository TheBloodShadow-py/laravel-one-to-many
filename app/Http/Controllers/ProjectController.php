<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypeRequest $request)
    {
        $data = $request->all();


        $new_project = new Project();
        $new_project->title = $data["title"];
        $new_project->mainlanguage = $data["mainlanguage"];
        $new_project->description = $data["description"];
        $new_project->imageurl = $data["imageurl"];
        $new_project->stars = $data["stars"];
        $new_project->type_id = $data["type_id"];

        $new_project->save();
        return redirect()->route("project", $new_project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        return view('admin.edit', compact('project', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeRequest $request, Project $project)
    {
        $data = $request->all();
        $project->update($data);

        return redirect()->route('project', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard');
    }
}
