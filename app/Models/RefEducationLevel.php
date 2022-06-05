<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefEducationLevel extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function refClassGrade()
    {
        return $this->hasMany(refClassGrade::class);
    }
}
