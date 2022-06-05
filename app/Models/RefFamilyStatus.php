<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefFamilyStatus extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function profileParentFathers()
    {
        return $this->hasMany(ProfileParent::class, 'father_status_id');
    }

    public function profileParentMothers()
    {
        return $this->hasMany(ProfileParent::class, 'mother_status_id');
    }
}
