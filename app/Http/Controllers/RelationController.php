<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use App\Models\MainCharacters;
use App\Models\PendingCharacter;
use App\Models\Relation;
use Illuminate\Http\Request;

class RelationController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {        
        $character = MainCharacters::all();
        $alt = Alt::all();
        return view('character.characterRelation', compact('character','alt'));
    }

    public function relationing(Request $request)
    {               
        $mainRelationn = new MainCharacters();
        $main = $request->input('main');
        $alt = $request->input('alt');
        $mainRelationn->mainRelation($main, $alt);
        return redirect('/')->with('message', 'Item saved correctly!!!');;
    }

    
    public function autoRelationing(Request $request)
    {               
        $mainRelationn = new MainCharacters();
        $pending = new PendingCharacter();
        $main = $request->input('main');
        $alt = $request->input('alt');
        $mainRelationn->autoRelate();
        return redirect('/')->with('message', 'Item saved correctly!!!');;
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
