<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Requests\SocialMediaRequest;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => "Social Media",
            'sub_title' => "Edit Social Media",
            'header' => "Edit Social Media",
            'socialMedial' => SocialMedia::get()->first(),
        ];
        return view('admin.content.profile.social_media', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocialMediaRequest $request)
    {
        if (SocialMedia::get()->first()?->id) {
            SocialMedia::find(SocialMedia::get()->first()->id)->update($request->validated());
            session()->put('success', 'Item Updated successfully.');
        } else {
            SocialMedia::create($request->validated());
            session()->put('success', 'Item created successfully.');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMedia $socialMedia)
    {
        //
    }
}
