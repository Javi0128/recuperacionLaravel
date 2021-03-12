<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class, 'coche_users')->withPivot('fecha_alquiler')->orderByPivot('fecha_alquiler', 'DESC');
    }
}
