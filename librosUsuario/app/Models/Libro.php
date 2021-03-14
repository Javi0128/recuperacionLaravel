<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class, 'libro_users')->withPivot('fecha');
    }
}
