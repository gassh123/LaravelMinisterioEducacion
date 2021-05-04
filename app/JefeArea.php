<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JefeArea extends Model
{
    protected $table = 'jefe_area';
    public $timestamps = false;
    
    public function jefearea()
    {
        return $this->hasMany('App\JefeArea');
    }
}
