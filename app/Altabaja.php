<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altabaja extends Model
{
    protected $fillable = [
        'id','colegio_id', 'dni', 'ApellidoNommbre', 'Cargo', 'Caracter', 'GradoSeccion', 'desdeN', 'hastaN','totalN','articulo','observacionesN'
    ];
    protected $primaryKey='id';
    public function docente(){
        $this->belongsTo(Docente::Class, 'docente_id');
    }

  //public function docentes(){
   // return $this->belongsToMany(Docente::Class, 'clave_foranea')->withTimestamps();


//}
}
