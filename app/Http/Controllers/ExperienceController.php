<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Http\Requests\ExperienceRequest;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Experiences",
            'sub_title' => "List",
            'header' => "All Experiences List",
            'experiences' => Experience::paginate(),
        ];
        return view('admin.content.experiences.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Experiences",
            'sub_title' => "Create",
            'header' => "Create Experience",
        ];
        return view('admin.content.experiences.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        Experience::create(array_merge($request->validated(), ['user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        $data = [
            'title' => "Experience",
            'sub_title' => "Edit",
            'header' => "Edit Experience",
            'experience' => $experience,
        ];
        return view('admin.content.experiences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, Experience $experience)
    {
        $experience->update($request->validated());
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
