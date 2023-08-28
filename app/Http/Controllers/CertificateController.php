<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Http\Requests\CertificationRequest;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => "Certificates",
            'sub_title' => "List",
            'header' => "All Certificates List",
            'certificates' => Certificate::paginate(),
        ];
        return view('admin.content.certificates.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Certificates",
            'sub_title' => "Create",
            'header' => "Create Certificates",
        ];
        return view('admin.content.certificates.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CertificationRequest $request)
    {
        Certificate::create(array_merge($request->validated(), ['user_id' => auth()->user()->id]));
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        $data = [
            'title' => "Skill",
            'sub_title' => "Edit",
            'header' => "Edit Skill",
            'certificate' => $certificate,
        ];
        return view('admin.content.certificates.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CertificationRequest $request, Certificate $certificate)
    {
        $certificate->update($request->validated());
        session()->put('success', 'Item Updated successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
