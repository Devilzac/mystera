<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Alt extends Model
{
    use HasFactory;
    use Searchable;
    
    public function main():BelongsToMany
    {
        return $this->belongsToMany(MainCharacters::class);
    }
}