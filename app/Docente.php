<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //public function institucions(){
     //   return $this->belongsToMany(Institucion::class, 'clave_foranea');
    //}

    public function altabajas(){
        return $this->hasMany(Altabaja::Class, 'docente_id');

    }
    public function institucion(){
       return $this->belongsTo(Institucion::Class, 'institucion_id');
    }
    

  // public function altabajas(){
  //     return $this->belongsToMany(Altabaja::Class, 'clave_foranea')->withTimestamps();


  // }
}
