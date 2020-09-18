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
        $datosNuevos->dni = $request->dni;
        $datosNuevos->ApellidoNombre = $request->ApellidoNombre;
        $datosNuevos->cargo = $request->cargo;
        $datosNuevos->caracter = $request->caracter;
        $datosNuevos->GradoSeccion = $request->GradoSeccion;
        $datosNuevos->Desde = $request->Desde;
        $datosNuevos->Hasta = $request->Hasta;
        $datosNuevos->Total = $request->Total;
        $datosNuevos->Motivo = $request->Motivo;
        $datosNuevos->Observaciones = $request->Observaciones;

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Alta/Baja agregada.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ningun Alta/Baja.');
        }
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