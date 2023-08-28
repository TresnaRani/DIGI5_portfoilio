<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'title' => "Project",
            'sub_title' => "List",
            'header' => "All Project List",
            'projects' => Project::paginate(),
        ];
        return view('admin.content.projects.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Project",
            'sub_title' => "Create",
            'header' => "Create Project",
            'success' => 'Project created successfully.'
        ];
        return view('admin.content.projects.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $fileName = time() . "-project." . $request->file('banner')->getClientOriginalExtension();
        $request->file('banner')->move(public_path('upload/project/'), $fileName);
        $project = Project::create(array_merge($request->validated(), ['banner' => $fileName, 'user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        dd($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = [
            'title' => "Project",
            'sub_title' => "Edit",
            'header' => "Edit Project",
            'project' => $project,
        ];
        return view('admin.content.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        if ($request->banner != '') {
            $path = public_path('upload/project/');

            //code for remove old file
            if ($project->banner != ''  && $project->banner != null) {
                $file_old = $path . $project->banner;
                unlink($file_old);
            }

            //upload new file
            $fileName = time() . "-project." . $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move(public_path('upload/project/'), $fileName);

            //for update in table
            $project->update(array_merge($request->validated(), ['banner' => $fileName]));
            return redirect()->back()->with('message', 'Project Updated Successfully');
        }
        $project->update(array_merge($request->validated(), ['banner' => $project->banner]));
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        unlink(public_path('upload/project/') . $project->banner);
        $project->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
