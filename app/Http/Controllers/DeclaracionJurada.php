<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclaracionJurada extends Controller
{
    public function vista()
    {
        $hola = "hola";
        
        return view('coordPersonal.declaracionJurada');
    }
}
