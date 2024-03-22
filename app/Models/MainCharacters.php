<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MainCharacters extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tribe',
        'description'
    ];

    public function automaticCreation(){
        $string = "RUB has returned. (same IP as reaper)";

        // Remove non-alphanumeric characters
        $cleanString = preg_replace('/[^a-zA-Z0-9]/', ' ', $string);
        $words = array_filter(explode(' ', $cleanString));
        $firstWord = reset($words);
        $lastWord = end($words);

        return [$firstWord, $lastWord];
    }


    public function getAllMainCharacters()
    {
        return MainCharacters::all()->sortBy('name');
    }

    public function unlink($id)
    {
        $alt = Alt::find($id);
            if (!$alt->main()->where('alt_id', $id)->exists()) {
                $alt->main()->detach($id);
            }
            
    }

    public function mainRelation($idMain, $alts)
    {
        $main = MainCharacters::find($idMain);
        foreach ($main as $char) {
            foreach ($alts as $alt) {
                if (!$char->alt()->where('alt_id', $alt)->exists()) {
                    $char->alt()->attach($alt);
                }
            }
        }
    }

    public function alt(): BelongsToMany
    {
        return $this->belongsToMany(Alt::class);
    }
}
