<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPeriodType extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function refPeriods()
    {
        return $this->hasMany(refPeriods::class);
    }
}
