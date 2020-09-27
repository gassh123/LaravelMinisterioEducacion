<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Institucion;
use App\Altabaja;
use App\Novedad;
use App\Otranovedad;


class InstitucionPlanillaController extends Controller
{
    public function create(){
        
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

        if ($_POST['elegirplanilla']) {
            $planilla=$_POST['elegirplanilla'];
            if ($planilla=='altabaja') {
              
                return view('Liquidacion.altaybaja')->with('colegio_id',$datosInstitucion->id);
            }
            if ($planilla=='novedades') {
               
                return view('Liquidacion.novedad.planillaNov')->with('colegio_id',$datosInstitucion->id);
            }
            if ($planilla=='otrasnovedades') {
                echo 'otrasnovedades';
            }
            
        }
        //dd($datosInstitucion);
        
    }

    public function filtrado(Request $request){
        
        $tipoplanilla=$request->get('elegirplanilla');
  
      

        if ($tipoplanilla=='AltaBaja') {
            $altabaja= Altabaja::all();
            $nombre=Institucion::All();
            $institucion=$request->get('elegirinstitucion');
            $filtro=Altabaja::where('colegio_id','LIKE',"%institucion%");
       
            
        return view ('Liquidacion.altaybaja', compact('altabaja'), compact('nombre'), compact('filtro'));
        }
        if ($tipoplanilla=='Novedades') {
            $novedad= Novedad::all();
            return view('Liquidacion.novedad.planillaNov', compact('novedad'));
         }
         if ($tipoplanilla=='OtrasNovedades') {
            $otranovedad= Otranovedad::all();
            return view('Liquidacion.otroNov.planillaOtraN', compact('otranovedad'));
         }
        return view('Liquidacion.filtlistado');
    }
    

   
   

}
