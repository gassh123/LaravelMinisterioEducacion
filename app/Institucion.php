<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $fillable = [
        'cod_escuela', 'Institucion', 'ctg', 'turno', 'domicilio', 'telefono', 'localidad', 'departamento'
    ];
    public function docentes()
    {
        return $this->belongsToMany('App\Docente','clave_foranea','institucion_id','docente_id');
    }

    
    
}
