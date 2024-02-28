<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use App\Models\MainCharacters;
use Illuminate\Http\Request;

class AltController extends Controller
{

    public function addAlt()
    {   
        $character = MainCharacters::all();
        return view('character.addAlt', compact('character'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('character.addAlt');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)    {
        $character = Alt::find($id);
        return view('character.alt', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alt $alt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alt $alt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alt $alt)
    {
        //
    }
}
