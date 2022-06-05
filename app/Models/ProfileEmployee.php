<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileEmployee extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function refBranch()
    {
        return $this->belongsTo(RefBranch::class);
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

    public function refEmploymentType()
    {
        return $this->belongsTo(RefEmploymentType::class);
    }
}
