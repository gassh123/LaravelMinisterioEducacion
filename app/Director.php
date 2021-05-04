<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'director';
    public $timestamps = false;
    
    public function director()
    {
        return $this->hasMany('App\Director');
    }
}
