<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefPeriod extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function periodType()
    {
        return $this->belongsTo(RefPeriodType::class);
    }
}
