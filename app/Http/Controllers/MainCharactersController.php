<?php

namespace App\Http\Controllers;

use App\Models\MainCharacters;
use Illuminate\Http\Request;

class MainCharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allChars = new MainCharacters;
        $list = $allChars->getAllMainCharacters();
        return view('index', compact('list'));
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
    public function show($id)
    {
        $character = MainCharacters::find($id);
        return view('character.character', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainCharacters $mainCharacters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainCharacters $mainCharacters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainCharacters $mainCharacters)
    {
        //
    }
}
