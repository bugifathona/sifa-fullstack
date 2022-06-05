<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileParent extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function fatherStatus()
    {
        return $this->belongsTo(RefFamilyStatus::class);
    }

    public function motherStatus()
    {
        return $this->belongsTo(RefFamilyStatus::class);
    }

    public function fatherEducationLevel()
    {
        return $this->belongsTo(RefEducationLevel::class);
    }

    public function motherEducationLevel()
    {
        return $this->belongsTo(RefEducationLevel::class);
    }

    public function fatherProfession()
    {
        return $this->belongsTo(RefProfession::class);
    }

    public function motherProfession()
    {
        return $this->belongsTo(RefProfession::class);
    }

    public function profileStudents()
    {
        return $this->hasMany(ProfileStudent::class);
    }
}
