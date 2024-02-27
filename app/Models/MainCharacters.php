<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Attributes\SearchUsingFullText;
use Laravel\Scout\Attributes\SearchUsingPrefix;
use Laravel\Scout\Searchable;

class MainCharacters extends Model
{
    use HasFactory;
    use Searchable;

    public function getAllMainCharacters(){
        return MainCharacters::all()->sortBy('name');
    }

    public function alt(): BelongsToMany
    {
        return $this->belongsToMany(Alt::class);
    }
    
}
