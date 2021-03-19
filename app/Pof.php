<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pof extends Model
{   
    protected $table = 'pofs';
    public $timestamps = false;
    
    public function pof_tabla_dato()
    {
        return $this->hasMany('App\Pof_tabla_dato');
    }
}
