<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;

    protected $table = 'languages';
    protected $primarykey = 'id';

    protected $fillable = [
        'language',
        'level',
        'id_profile'
    ];
}
