<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Novedad;
use App\Altabaja;
use App\Otranovedad;
class Institucion extends Model
{
    protected $fillable = [
        'num','cod_escuela', 'Institucion', 'ctg', 'turno', 'domicilio', 'telefono', 'localidad', 'departamento'
    ];

    public function scopeInstituciones($query, $Institucion){
        if ($Institucion) {
            return $query->where ('Institucion','like',"%$Institucion%");
        }
    }

    protected $primaryKey='id';
    public function docentes()
    {
        return $this->belongsToMany('App\Docente','clave_foranea','institucion_id','docente_id');
    }

    public function novedades()
    {
        return $this->hasMany(Novedad::class);
    }
    public function altasbajas()
    {
        return $this->hasMany(Altabaja::class);
    }
    public function otranovedades()
    {
        return $this->hasMany(Otranovedad::class);
    }
    
}
