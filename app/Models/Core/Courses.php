<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    
    protected $table = 'courses';
    protected $primarykey = 'id';

    protected $fillable = [
        'course',
        'institution',
        'method',
        'conclusion',
        'id_profile'
    ];
}
