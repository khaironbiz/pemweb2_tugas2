<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penyelenggara',
        'judul',
        'isi',
        'date_publish',
        'harga',
        'kuota',
        'banner',
        'date_mulai', 'date_selesai',
        'tempat',
        'ringkasan',
        'banner',
        'slug',
        'created_by',
        'created_at',
    ];
    public function partner()
    {
        return $this->belongsTo(Partner::class,'id_penyelenggara','id');
    }
}
