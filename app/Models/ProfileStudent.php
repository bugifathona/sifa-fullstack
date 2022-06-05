<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileStudent extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function acadSchool()
    {
        return $this->belongsTo(AcadSchool::class);
    }

    public function refEntryYear()
    {
        return $this->belongsTo(RefEntryYear::class);
    }

    public function acadSchoolOrigin()
    {
        return $this->belongsTo(AcadSchoolOrigin::class);
    }

    public function profileParent()
    {
        $this->belongsTo(ProfileParent::class);
    }

    public function refGender()
    {
        return $this->belongsTo(RefGender::class);
    }

    public function refReligion()
    {
        return $this->belongsTo(RefReligion::class);
    }

    public function refStifin()
    {
        return $this->belongsTo(RefStifin::class);
    }
}
