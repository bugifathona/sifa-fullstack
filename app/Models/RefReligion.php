<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefReligion extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function profileEmployees()
    {
        return $this->hasMany(ProfileEmployee::class);
    }

    public function profileStudents()
    {
        return $this->hasMany(ProfileStudent::class);
    }
}
