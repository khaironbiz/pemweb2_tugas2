<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;
    protected $table = 'examples';
    protected $fillable = [
        'nama', 'nik','jk','tl','status','username','email', 'hp','alamat',
    ];


}
