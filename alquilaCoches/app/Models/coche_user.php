<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coche_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coche_id',
        'fecha_alquiler'
    ];
}
