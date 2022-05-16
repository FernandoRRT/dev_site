<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frameworks extends Model
{
    use HasFactory;
            
    protected $table = 'frameworks';
    protected $primarykey = 'id';

    protected $fillable = [
        'framework',
        'level',
        'id_profile'
    ];
}
