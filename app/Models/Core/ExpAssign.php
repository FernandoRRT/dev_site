<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpAssign extends Model
{
    use HasFactory;
        
    protected $table = 'expassign';
    protected $primarykey = 'id';

    protected $fillable = [
        'assignment',
        'id_experience'
    ];
}
