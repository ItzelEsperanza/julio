<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;


     public function materias(){
    return $this->belongsToMany('App\Models\Materia');
    }
}
