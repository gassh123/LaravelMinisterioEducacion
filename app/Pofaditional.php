<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pofaditional extends Model
{
    protected $table = 'pofaditional';
    public $timestamps = false;
    
    public function pofaditional()
    {
        return $this->hasMany('App\Pofaditional');
    }
}
