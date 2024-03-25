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


    public function getAllMainCharacters()
    {
        return MainCharacters::all()->sortBy('name', SORT_NATURAL, true);
    }

    public function mainRelation($idMain, $alts)
    {
        $main = MainCharacters::find($idMain);
        foreach ($main as $char) {
            foreach ($alts as $alt) {
                if(!$char->alt()->where('alt_id', $alt)->exists()){
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
