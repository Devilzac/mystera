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
    public function autoRelate()
    {
        $pending = PendingCharacter::all()->sortBy('name', SORT_NATURAL, true);
        
        foreach ($pending as $p_char) {
            $main = MainCharacters::where('name', $p_char->character1)->get();
            $res = new Alt();
            $resul = $res->getAllAltCharactersByName($p_char->character2);
            if($resul->isEmpty()==false){
                foreach ($main as $char) {
                        if(!$char->alt()->where('name', $p_char->character2)->exists()){
                            $char->alt()->attach($resul); 
                            
                                if ($p_char) {
                                    // If the item exists, delete it
                                    $p_char->delete();
                                    echo "Item deleted successfully.";
                                }       
                        }
                }
            }
        }
        
    }


    public function alt(): BelongsToMany
    {
        return $this->belongsToMany(Alt::class);
    }
    public function relatedMainCharacters()
    {
        return $this->belongsToMany(MainCharacters::class, 'alt_main_characters', 'main_characters_id', 'alt_id');
    }
}
