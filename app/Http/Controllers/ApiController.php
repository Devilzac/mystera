<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function handle(Request $request)
    {
        // Process incoming JSON data
        $data = $request->json()->all();
        dd($data);
        return response()->json(['message' => 'Data received successfully']);
    }
}
