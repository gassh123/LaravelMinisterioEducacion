<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F2 extends Model
{   
    protected $table = 'f2s';
    public function f2_dato()
    {
        return $this->hasMany('App\F2_dato');
    }
}
