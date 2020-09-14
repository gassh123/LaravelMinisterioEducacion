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
    protected $fillable = [
        'institucion_id','Dni', 'ApellidoNombre', 'Cargo', 'Caracter', 'GradoSeccion'
    ];
    public function instituciones()
    {
        return $this->belongsToMany('App\Institucion','clave_foranea','docente_id','institucion_id');
    }
    

  // public function altabajas(){
  //     return $this->belongsToMany(Altabaja::Class, 'clave_foranea')->withTimestamps();


  // }
}
