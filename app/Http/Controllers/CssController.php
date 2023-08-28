<?php

namespace App\Http\Controllers;

use App\Models\Css;
use Illuminate\Http\Request;

class CssController extends Controller
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
            'title' => "CSS",
            'sub_title' => "ADD AND DELETE",
            'header' => "Css Add and Delete",
        ];
        return view('admin.content.profile.css', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['link' => 'required|string']);
        Css::create(['link' => $request->link]);
        session()->put('success', 'Item created successfully.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Css $css)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Css $css)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Css $css)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Css $css)
    {
        $css->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
