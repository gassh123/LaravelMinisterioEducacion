<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Persona;
use App\Pof;
use App\Pof_tabla_dato;

class PofController extends Controller
{
    public function vista()
    {   
        //dd(Persona::search('alfredo')->get());
        $usuario = Auth::user();
        return view('plantaOrganica.vista', ['usuario'=>$usuario]);
    }

    public function BuscadorPersona(Request $request){
       $personas =  Persona::search($request->dato)->get();
       return redirect()->back()->with(['personas' => $personas]);
    }

    public function AgregarDatosTabla(Request $request){
        $usuario = Auth::user();
        
        if(is_null($usuario->pof)){ 
            
            $pof = new Pof();
            $pof->user_id = $usuario->id;
            $pof->institution_id = 1;
            $pof->save();
            
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;  
            $pof_tabla_dato->save();
        }else{
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $usuario->pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;  
            $pof_tabla_dato->save();
        }
        

        //dd($usuario->pof);
        
        

        return redirect('Pof')->with('status', 'Persona agregada al listado de la planta organizacional');

     }

    public function eliminar($id, $id_tabla){
        
        $pof_tabla_dato = Pof_tabla_dato::find($id_tabla)->delete();
        $pof = Pof::find($id);
        //dd($pof->pof_tabla_dato->isEmpty());
        if($pof->pof_tabla_dato->isEmpty()){   
            $pof->delete();
        }
        
        return redirect()->back();
    }

    public function pofPDF(Request $request){
        
        dd($request);
    }
}
