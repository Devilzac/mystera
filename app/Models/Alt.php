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

    public function unlink($id)
    {
        $alt = Alt::find($id);            
        $alt->main()->detach($id);
            
    }

    public function getAllAltCharacters(){
        return Alt::all()->sortBy('name');
    }

    public function main():BelongsToMany
    {
        return $this->belongsToMany(MainCharacters::class);
    }
}
