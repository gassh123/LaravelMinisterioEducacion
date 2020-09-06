<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    
    public function docentes(){
        return $this->hasMany(Docente::Class, 'institucion_id');

    }
}
