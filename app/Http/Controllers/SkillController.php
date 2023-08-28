<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Sills",
            'sub_title' => "List",
            'header' => "All Skill List",
            'skills' => Skill::paginate(),
        ];
        return view('admin.content.skills.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Skill",
            'sub_title' => "Create",
            'header' => "Create Skill",
        ];
        return view('admin.content.skills.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        Skill::create(array_merge($request->validated(), ['user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $data = [
            'title' => "Skill",
            'sub_title' => "Edit",
            'header' => "Edit Skill",
            'skill' => $skill,
        ];
        return view('admin.content.skills.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update(array_merge($request->validated()));
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
