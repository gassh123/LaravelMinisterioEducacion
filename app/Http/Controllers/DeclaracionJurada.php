<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        
        
        $vista = view('coordPersonal.pdfF2')->with('request', $request);
        $domp = App::make('dompdf.wrapper');
        $domp->loadHTML($vista);
        $fecha = date("d-m-Y");
        if($request->input('boton_ver')){
            return $domp->stream();
        }
        elseif($request->input('boton_guardar')){
            $usuario = Auth::user();
            $f2 = $usuario->name.'_'.$fecha.'_DeclaracionJurada.pdf';
            
            return $domp->download($f2);
        }
        else{
            return $domp->stream();
        }     
    }
}
