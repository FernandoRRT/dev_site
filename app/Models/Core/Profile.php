<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'area',
        'bio',
        'city',
        'phone',
        'email',
        'website',
        'linkedin',
        'github'
    ];

    public function abilities()
    {
        return $this->hasMany(Abilities::class, 'id_profile');
    }
    public function courses()
    {
        return $this->hasMany(Courses::class, 'id_profile');
    }
    public function education()
    {
        return $this->hasMany(Education::class, 'id_profile');
    }
    public function experience()
    {
        return $this->hasMany(Experience::class, 'id_profile');
    }
    public function frameworks()
    {
        return $this->hasMany(Frameworks::class, 'id_profile');
    }
    public function languages()
    {
        return $this->hasMany(Languages::class, 'id_profile');
    }

}
