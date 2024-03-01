<?php

namespace App\Http\Controllers;

use App\Models\Alt;
use App\Models\MainCharacters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainCharactersController extends Controller
{
    public function __invoke(Request $request)
    {
        return $this->autoCreate();
    }

    public function autoCreate()
    {
        /*
        $channelId = "1158875088565837955";
        $channelId1 = "1158886744209489981";
        $req = "https://discord.com/api/v9/channels/$channelId1/messages";

        $breeds = Http::withHeaders([
            'Authorization' =>  'MTc2ODE3OTI2NDA0NDQwMDY1.GCJgoO.7RtFkb5ZFuz7E582aErr2d44KDzRkSTjtwDhYc',
            'Content-Type' => 'application/json' 
       ])->get($req);
        $newArray = [];
       // var_dump($req,$breeds->json());
        foreach ($breeds->json() as $key => $value) {
            if (str_contains($value['content'], "same IP as")) {
                array_push($newArray,$value['content']);
            }
        }
        var_dump($newArray);
        $main = new MainCharacters();
        $result = $main->automaticCreation();
        dd($breeds);*/
    }

    public function unlink($id)
    {
        $character = new Alt;
        $list = $character->unlink($id);
    }

    public function search(Request $request)
    {
        $search_param = $request->query('search');
        $searchType = $request->query('searchType');
        if (is_null($searchType)) {
            $character = MainCharacters::where('name', 'like', "%$search_param%")->first();
            return view('character.character', compact('character'));
        }
        if ($searchType == 'on') {
            $character = Alt::where('name', 'like', "%$search_param%")->first();
            return view('character.alt', compact('character'));
        }
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
        $character = Alt::all();
        return view('character.addMain', compact('character'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = request()->all();
        //dd($result);
        MainCharacters::create($result);
        return redirect('/')->with('message', 'Item saved correctly!!!');;
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
