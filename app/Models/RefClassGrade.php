<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefClassGrade extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function refEducationLevel()
    {
        return $this->belongsTo(RefEducationLevel::class);
    }
}
