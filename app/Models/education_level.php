<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education_level extends Model
{
    use HasFactory;
    public function education_type()
    {
        return $this->belongsTo(Education_type::class);
    }
}
