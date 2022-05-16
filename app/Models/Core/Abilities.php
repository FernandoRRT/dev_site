<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abilities extends Model
{
    use HasFactory;
 
    protected $table = 'abilities';
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'id_profile'
    ];
    
}
