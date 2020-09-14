<?php 
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Institucion\Controller;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
use App\Altabaja;
use App\Docente;
use App\Institucion;
use App\clave_foranea;
class PivotController extends Controller
{
    public function prueba()
        {  
        
           // $docente = Docente::findOrFail(1);
        //  $docente->instituciones;
            return view ('liquidacion.prueba');

        }
    public function pruebaform(Request $request)
        {  
        
           $request->validate([
               'institucion_id'=>'required',
               'docente_id'=>'required',
           ]);

           $datoNuevo=New clave_foranea();
           $datoNuevo->institucion_id=$request->institucion_id;
           $datoNuevo->docente_id=$request->docente_id;

           if ($datoNuevo->save()) {
            return back()->with('Funciona.');
           }else {
            return back()->with('NoFunciona.');
           }


        }
}
?>