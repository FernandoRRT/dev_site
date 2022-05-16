<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
        
    protected $table = 'experience';
    protected $primarykey = 'id';

    protected $fillable = [
        'company',
        'entrance',
        'departure',
        'position',
        'id_profile'
    ];
    public function assign()
    {
        return $this->hasMany(ExpAssign::class, 'id_experience');
    }
}
