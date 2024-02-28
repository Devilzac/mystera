<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use App\Models\MainCharacters;
use Illuminate\Http\Request;

class AltController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $allChars = new Alt();
        $list = $allChars->getAllAltCharacters();
        return view('altList', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $character = Alt::all();
        return view('character.addAlt', compact('character'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = request()->all();
        Alt::create($item);
        
        return redirect('/alts')->with('message', 'Item saved correctly!!!');
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
