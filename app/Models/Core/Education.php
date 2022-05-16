<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    protected $table = 'education';
    protected $primarykey = 'id';

    protected $fillable = [
        'course',
        'institution',
        'type',
        'start',
        'conclusion',
        'id_profile'
    ];
}
