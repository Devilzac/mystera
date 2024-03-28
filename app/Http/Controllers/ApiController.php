<?php

namespace App\Http\Controllers;

use App\Models\PendingCharacter;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function handle(Request $request)
    {
        // Process incoming JSON data
        $data = $request->json()->all();        
        PendingCharacter::firstOrCreate(
            [
            'character1' => $data['character1'], 
            'character2' => $data['character2']
            ]
        );
        return response()->json(['message' => 'Data received successfully']);
    }
}
