<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alt extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'name',
        'tribe',
        'description'
    ];

    public function getAllAltCharacters(){
        return Alt::all()->sortBy('name', SORT_NATURAL, true);
    }
    public function getAllAltCharactersByName($data){
        return Alt::where('name', $data)->get();
    }

    public function main():BelongsToMany
    {
        return $this->belongsToMany(MainCharacters::class);
    }
}
