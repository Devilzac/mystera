<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use App\Models\MainCharacters;
use Illuminate\Http\Request;

class MainCharactersController extends Controller
{

    public function addMain()
    {        
        $character = Alt::all();
        return view('character.addMain', compact('character'));
    }


    public function search(Request $request)
    {
        $search_param = $request->query('search');
        $searchType = $request->query('searchType');

        switch ($searchType) {
            case 'main':
                $character = MainCharacters::where('name', 'like', "%$search_param%")->first();
                break;
            case 'alt':
                $character = Alt::where('name', 'like', "%$search_param%")->first();
                return view('character.alt', compact('character'));
                break;
            default:
                $character = MainCharacters::where('name', 'like', "%$search_param%")->first();
                break;
        }
        return view('character.character', compact('character'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
