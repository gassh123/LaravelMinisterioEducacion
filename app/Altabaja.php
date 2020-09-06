<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altabaja extends Model
{
    public function docente(){
        $this->belongsTo(Docente::Class, 'docente_id');
    }

  //public function docentes(){
   // return $this->belongsToMany(Docente::Class, 'clave_foranea')->withTimestamps();


//}
}
