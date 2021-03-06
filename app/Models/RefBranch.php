<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefBranch extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function profileEmployees()
    {
        return $this->hasMany(ProfileEmployee::class);
    }
}
