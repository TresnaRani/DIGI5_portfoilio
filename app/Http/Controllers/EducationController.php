<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Http\Requests\EducationRequest;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Education",
            'sub_title' => "List",
            'header' => "All Education List",
            'educations' => Education::paginate(),
        ];
        return view('admin.content.educations.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Education",
            'sub_title' => "Create",
            'header' => "Create Education",
        ];
        return view('admin.content.educations.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        Education::create(array_merge($request->validated(), ['user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        $data = [
            'title' => "Education",
            'sub_title' => "Edit",
            'header' => "Edit Education",
            'education' => $education,
        ];
        return view('admin.content.educations.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, Education $education)
    {
        $education->update(array_merge($request->validated()));
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
