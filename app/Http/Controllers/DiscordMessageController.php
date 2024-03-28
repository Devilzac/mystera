<?php

namespace App\Http\Controllers;

use App\Models\PendingCharacter;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class DiscordMessageController extends Controller
{
    public function index(){
        $allChars = new PendingCharacter();
        $list = $allChars->getList();
        return view("missingToAdd", compact("list"));
    }
    public function fetchMessages()
    {
    
        try {
            // Make the HTTP request using Laravel HTTP client
            $response = Http::withOptions(['verify' => false])
                ->withHeaders([
                    'Authorization' => $token,
                ])->get($url2);

            // Check if request was successful
            if ($response->successful()) {
                $data = $response->json();
                // Filter messages to include only those containing "(same IP as"
                $filteredMessages = array_filter($data["messages"], function ($message) {
                    return strpos($message[0]['content'], 'has returned. (same IP') !== false;
                });

                // Extract character1 and character2 from each message
                $contents = array_map(function ($message) {
                    // Removing backticks and parentheses
                    $contentWithoutSpecialChars = preg_replace('/[`()]/', '', $message[0]['content']);

                    // Splitting the content into words
                    $words = preg_split('/\s+/', $contentWithoutSpecialChars);

                    // Extracting the first and last words
                    $character1 = $words[0];
                    $character2 = end($words);

                    return ['character1' => $character1, 'character2' => $character2, 'message'=>$contentWithoutSpecialChars];
                }, $filteredMessages);
                return response()->json($contents);
            } else {
                return response()->json(['error' => 'Error fetching messages'], $response->status());
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }
    
    }
}
