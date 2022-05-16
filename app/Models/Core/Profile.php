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
        return $this->hasOne(Abilities::class, 'id_profile');
    }
    public function courses()
    {
        return $this->hasOne(Courses::class, 'id_profile');
    }
    public function education()
    {
        return $this->hasOne(Education::class, 'id_profile');
    }
    public function experience()
    {
        return $this->hasOne(Experience::class, 'id_profile');
    }
    public function frameworks()
    {
        return $this->hasOne(Frameworks::class, 'id_profile');
    }
    public function languages()
    {
        return $this->hasOne(Languages::class, 'id_profile');
    }

}
