<?php

namespace App\Console\Commands;

use App\Models\PendingCharacter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchDiscordMessages extends Command
{
    protected $signature = 'discord:fetch-messages';

    protected $description = 'Fetch messages from Discord API';

    public function handle()
    {
   /*

        // Make the HTTP request using Laravel HTTP client
        $response = Http::withOptions(['verify' => false])
            ->withHeaders([
                'Authorization' => $token,
            ])->get($url2);

        // Check if request was successful
        if ($response->successful()) {
            $data = $response->json();

            // Your message processing logic here
            $filteredMessages = array_filter($data["messages"], function ($message) {
                //  return strpos($message['content'], 'has returned. (same IP') !== false; //url
               return strpos($message[0]['content'], 'has returned. (same IP') !== false;
            });
            $contents = array_map(function ($message) {
                // Removing backticks and parentheses
                //$contentWithoutSpecialChars = preg_replace('/[`(.)]/', '', $message['content']); //url
                $contentWithoutSpecialChars = preg_replace('/[`(.)]/', '', $message[0]['content']);

                // Splitting the content into words
                $words = preg_split('/\s+/', $contentWithoutSpecialChars);

                // Extracting the first and last words
                $character1 = $words[0];
                $character2 = end($words);

                PendingCharacter::firstOrCreate(
                    [
                    'character1' => $character1, 
                    'character2' => $character2, 
                    'message'=> $contentWithoutSpecialChars
                    ]
                );
                return ['character1' => $character1, 'character2' => $character2, 'message'=> $contentWithoutSpecialChars];
            }, $filteredMessages);
        
            $this->info('Messages fetched and stored successfully!');
            // For example, you can store the messages in the database or perform any other operations
            
            $this->info('Messages fetched successfully!');
        } else {
            $this->error('Error fetching messages: ' . $response->status());
        }*/
    }
}
