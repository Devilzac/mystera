<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MainCharacters extends Model
{
    use HasFactory;

    public function getAllMainCharacters(){
        return MainCharacters::all();
    }

    public function alt(): BelongsToMany
    {
        return $this->belongsToMany(Alt::class);
    }
    
}
