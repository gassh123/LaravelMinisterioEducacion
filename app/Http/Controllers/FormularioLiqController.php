<?php 
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Institucion\Controller;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use App\SubirFormulario;

class FormularioLiqController extends Controller
{
    public function add()
        {  
            return view('liquidacion.add');
        }
    
    public function store(Request $request)
        {  
           
                    $request->validate([

                        'name'=>'required',
                        'tipo'=>'required',
                        'URLForm'=>'required'

                    ]);
                                
                
                $datosNuevos=new App\SubirFormulario;
                $datosNuevos->name = $request->name;
                $datosNuevos->tipo = $request->tipo;
                $datosNuevos->URLForm = $request->URLForm;

                if ($datosNuevos->save()) {
                    # code...
                    return back()->with('mensaje','Planilla agregada.');
                }else{
                    # code...
                    return back()->with('errormsj','Error al guardar planilla.');
                }
            
        }

    public function listado(Request $request){
        $query=$request->get('search');
       $tipo= SubirFormulario::where('tipo','LIKE','%'.$query.'%');
        $listado= App\SubirFormulario::all();
        
            return view ('liquidacion.listado', compact('listado'), compact('tipo'));
    }

    public function filtlistado(Request $request){
        $query=$request->get('search');
       $tipo= SubirFormulario::where('tipo','LIKE','%'.$query.'%') ;
       
       return view ('liquidacion.filtlistado', compact('tipo')) ;
       
    }
}
?>