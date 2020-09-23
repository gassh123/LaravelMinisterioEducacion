<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institucion;

class InstitucionPlanillaController extends Controller
{
    public function create(){
        //$datos= App\Institucion::all();
       // dd($datos);
        return view('Liquidacion.novedad.Colegios');
    }
    public function store(Request $request)
    {
        $request->validate([
            'cod_escuela'=>'required',
            'Institucion'=>'required',
            'ctg'=>'required',
            'turno'=>'required',
            'domicilio'=>'required',
            'telefono'=>'required',
            'localidad'=>'required',
            'departamento'=>'required', 

            ]);
        $datosInstitucion= new Institucion();
        $datosInstitucion->cod_escuela= $request->cod_escuela;
        $datosInstitucion->Institucion= $request->Institucion;
        $datosInstitucion->ctg= $request->ctg;
        $datosInstitucion->turno= $request->turno;
        $datosInstitucion->domicilio= $request->domicilio;
        $datosInstitucion->telefono= $request->telefono;
        $datosInstitucion->localidad= $request->localidad;
        $datosInstitucion->departamento= $request->departamento;
        $datosInstitucion->save();
        //dd($datosInstitucion);
       return view('Liquidacion.novedad.planillaNov')->with('colegio_id',$datosInstitucion->id);
    }
   

}
