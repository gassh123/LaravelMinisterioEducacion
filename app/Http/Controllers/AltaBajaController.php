<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use PDF;
use Illuminate\Support\Facades\DB;
use App\Altabaja;

class AltaBajaController extends Controller
{
    public function altaybaja(){
        $altabaja= App\Altabaja::all();
        return view ('liquidacion.altaybaja', compact('altabaja'));
    }
    public function altaybajapost(Request $request){
        $request->validate([

          /*  'NumeroInst'=>'required',
            'NombreInst'=>'required',
            'TurnoInst'=>'required',
            'DomicilioInst'=>'required',
            'TelefonoInst'=>'required',
            'LocalidadInst'=>'required',
            'DepartamentoInst'=>'required',*/
            'num'=>'required',
            'dni'=>'required',
            'ApellidoNombre'=>'required',
            'cargo'=>'required',
            'caracter'=>'required',
            'GradoSeccion'=>'required',
            'Desde'=>'required',
            'Hasta'=>'required',
            'Total'=>'required',
            'Motivo'=>'required',
            'Observaciones'=>'required',

        ]);
                    
    
        $datosNuevos=new App\Altabaja;
       /* $datosNuevos->NumeroInst = $request->NumeroInst;
        $datosNuevos->NombreInst = $request->NombreInst;
        $datosNuevos->TurnoInst = $request->TurnoInst;
        $datosNuevos->DomicilioInst = $request->DomicilioInst;
        $datosNuevos->TelefonoInst = $request->TelefonoInst;
        $datosNuevos->LocalidadInst = $request->LocalidadInst;
        $datosNuevos->DepartamentoInst = $request->DepartamentoInst;*/
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
        return view('Liquidacion.altaybaja')->with('colegio_id',$datosNuevos->colegio_id);
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