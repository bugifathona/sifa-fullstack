<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcadSchoolOrigin extends Model
{
    use HasFactory;
    public function profileStudents()
    {
        return $this->hasMany(ProfileStudent::class);
    }
}
