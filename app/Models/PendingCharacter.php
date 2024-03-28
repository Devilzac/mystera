<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingCharacter extends Model
{
    use HasFactory;

    protected $fillable = [
        'character1',
        'character2',
    ];

    public function getList()
    {
        return PendingCharacter::all()->sortBy('character1', SORT_NATURAL, true);
    }
  
}
