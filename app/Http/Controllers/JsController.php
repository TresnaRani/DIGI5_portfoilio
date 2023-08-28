<?php

namespace App\Http\Controllers;

use App\Models\Js;
use Illuminate\Http\Request;

class JsController extends Controller
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
            'title' => "JS",
            'sub_title' => "ADD AND DELETE",
            'header' => "Js Add and Delete",
        ];
        return view('admin.content.profile.js', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['link' => 'required|string']);
        Js::create(['link' => $request->link]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Js $js)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Js $js)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Js $js)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Js $js)
    {
        $js->delete();
        session()->put('success', 'Item Deleted successfully.');
        return redirect()->back();
    }
}
