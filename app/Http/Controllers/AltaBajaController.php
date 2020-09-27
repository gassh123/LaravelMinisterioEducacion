<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Altabaja;
use App\Institucion;

class AltaBajaController extends Controller
{
    public function altaybaja(Request $request){
        $institucion=$request->get('elegirinstitucion');
            $filtro=Altabaja::where('colegio_id','LIKE',"%institucion%");
        $altabaja= Altabaja::all();
        $nombre=Institucion::All();
        $altabajainst='SELECT altabajas.colegio_id FROM `altabajas`';
        if ($institucion==$filtro) {
            echo 'Listo';
        }
        return view ('Liquidacion.altaybaja', compact('altabaja'), compact('nombre'), compact('filtro'));
    }
    public function altaybajapost(Request $request){
        
        $request->validate([ 

         
            'num'=>'required',
            'colegio_id'=>'required',
            'dni'=>'required',
            'ApellidoNommbre'=>'required',
            'Cargo'=>'required',
            'Caracter'=>'required',
            'GradoSeccion'=>'required',
            'desdeN'=>'required',
            'hastaN'=>'required',
            'totalN'=>'required',
            'articulo'=>'required',
            'observacionesN'=>'required',

        ]);
                    
    
        $datosNuevos=new Altabaja();
        $datosNuevos->num = $request->num;
        $datosNuevos->colegio_id = $request->colegio_id;
        $datosNuevos->dni = $request->dni;
        $datosNuevos->ApellidoNommbre = $request->ApellidoNommbre;
        $datosNuevos->Cargo = $request->Cargo;
        $datosNuevos->Caracter = $request->Caracter;
        $datosNuevos->GradoSeccion = $request->GradoSeccion;
        $datosNuevos->desdeN = $request->desdeN;
        $datosNuevos->hastaN = $request->hastaN;
        $datosNuevos->totalN = $request->totalN;
        $datosNuevos->articulo = $request->articulo;
        $datosNuevos->observacionesN = $request->observacionesN;
        $datosNuevos->save();
        return view('Liquidacion.altaybajapost')->with('colegio_id',$datosNuevos->colegio_id);
    }
    public function ver(){
        $altabaja=App\Altabaja::all();
        //dd($request);
        $pdf=\PDF::loadView('liquidacion.verpdfAltaBaja', compact('altabaja'));
        return $pdf->setPaper('a4', 'landscape')->stream('PlanillaAltaBaja.pdf');
         
    }
    public function descargar(){
        $altabaja=App\Altabaja::all();
        //dd($request);
        $pdf=\PDF::loadView('liquidacion.descargarpdfAltaBaja', compact('altabaja'));
        return $pdf->setPaper('a4', 'landscape')->download('PlanillaAltaBaja.pdf');
         
    }
   
    public function delete($id){
        
        
            $datosDelete=App\Altabaja::findOrFail($id);
            $datosDelete->delete();
            return back()->with('mensajeDel','Alta/Baja eliminada.');
    

        } 
}
?>