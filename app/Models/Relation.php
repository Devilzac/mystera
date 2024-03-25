<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Relation extends Model
{
    use HasFactory;
    protected $fillable = [
        'main'=>[],
        'alt'=>[]
    ];
    

    public function getAllRelation(){
        return Relation::all()->sortBy('name', SORT_NATURAL);
    }
    

    public function alt(): BelongsToMany
    {
        return $this->belongsToMany(Alt::class);
    }
    
}
