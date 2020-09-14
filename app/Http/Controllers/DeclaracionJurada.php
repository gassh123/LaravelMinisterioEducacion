<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App;

class DeclaracionJurada extends Controller
{
    public function vista()
    {
        return view('coordPersonal.declaracionJurada');
    }
    /*public function imprimir(){
        $pdf = PDF::loadView('coordPersonal.pdfF2');
        return $pdf->download('f2.pdf');       
    }*/

    public function ver(Request $request){
        
        //dd($request);
        $vista = view('coordPersonal.pdfF2')->with('request', $request);
        $domp = App::make('dompdf.wrapper');
        $domp->loadHTML($vista);
        $fecha = date("d-m-Y");
        if($request->input('boton_ver')){
            return $domp->stream();
        }
        elseif($request->input('boton_guardar')){
            return $domp->download($fecha.'f2.pdf');
        }
        else{
            return $domp->stream();
        }     
    }
}
