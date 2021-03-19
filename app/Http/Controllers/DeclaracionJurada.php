<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;
use App;
use App\User;
use App\F2;
use App\F2_dato;

class DeclaracionJurada extends Controller
{
    public function vista()
    {
        $usuario = Auth::user();
        
        //dd($usuario->f2->f2_dato);
        return view('coordPersonal.declaracionJurada', ['usuario'=>$usuario]);
    }
    /*public function imprimir(){
        $pdf = PDF::loadView('coordPersonal.pdfF2');
        return $pdf->download('f2.pdf');       
    }*/

    public function ver(Request $request){
        
        $usuario = Auth::user();
        
        if($usuario->f2){
            
            $f2_datos = F2_dato::where('user_id', $usuario->id)->delete();
            $usuario->f2->delete();

            $f2 = new F2();
            $f2->user_id = $usuario->id;
            $f2->tipo_documento = $request->numero;
            $f2->numero_documento = $request->numDoc;
            $f2->numero_cuil = $request->numCUIL;
            $f2->nombre_apellido = $request->apellidoNombre;
            $f2->jubilado = $request->jubilacion;
            $f2->fecha_jubilacion = $request->fechaJubilacion;
            $f2->resolucion_numero_uno = $request->resPart1;
            $f2->resolucion_numero_dos = $request->resPart2;
            $f2->save();

            for($i = 1; $i <= $request->cantidad ; $i++){
                if($request->input('id'.$i) != NULL){
                    $f2_dato = new F2_dato();
                    $f2_dato->f2_id = $f2->id;
                    $f2_dato->user_id = $f2->user_id;
                    $f2_dato->id_datos = $request->input('id'.$i);
                    $f2_dato->establecimiento = $request->input('dependencia'.$i);
                    $f2_dato->fecha_ingreso = $request->input('fecha'.$i);
                    $f2_dato->cod_cargo = $request->input('cargo'.$i);
                    $f2_dato->ag = $request->input('ag'.$i);
                    $f2_dato->cr = $request->input('cr'.$i);
                    $f2_dato->ant = $request->input('ant'.$i);
                    $f2_dato->asignatura = $request->input('asignatura'.$i);
                    $f2_dato->h = $request->input('h'.$i);
                    $f2_dato->n = $request->input('n'.$i);
                    $f2_dato->c = $request->input('c'.$i);
                    $f2_dato->d = $request->input('d'.$i);
                    $f2_dato->t = $request->input('t'.$i);
                    $f2_dato->lunes = $request->input('lunes'.$i);
                    $f2_dato->martes = $request->input('martes'.$i);
                    $f2_dato->miercoles = $request->input('mierc'.$i);
                    $f2_dato->jueves = $request->input('jueves'.$i);
                    $f2_dato->viernes = $request->input('viernes'.$i);
                    $f2_dato->save();
                }
            }
        }
        else{
            $f2 = new F2();
            $f2->user_id = $usuario->id;
            $f2->tipo_documento = $request->numero;
            $f2->numero_documento = $request->numDoc;
            $f2->numero_cuil = $request->numCUIL;
            $f2->nombre_apellido = $request->apellidoNombre;
            $f2->jubilado = $request->jubilacion;
            $f2->fecha_jubilacion = $request->fechaJubilacion;
            $f2->resolucion_numero_uno = $request->resPart1;
            $f2->resolucion_numero_dos = $request->resPart2;
            $f2->save();

            for($i = 1; $i <= $request->cantidad ; $i++){
                $f2_dato = new F2_dato();
                $f2_dato->f2_id = $f2->id;
                $f2_dato->user_id = $f2->user_id;
                $f2_dato->id_datos = $request->input('id'.$i);
                $f2_dato->establecimiento = $request->input('dependencia'.$i);
                $f2_dato->fecha_ingreso = $request->input('fecha'.$i);
                $f2_dato->cod_cargo = $request->input('cargo'.$i);
                $f2_dato->ag = $request->input('ag'.$i);
                $f2_dato->cr = $request->input('cr'.$i);
                $f2_dato->ant = $request->input('ant'.$i);
                $f2_dato->asignatura = $request->input('asignatura'.$i);
                $f2_dato->h = $request->input('h'.$i);
                $f2_dato->n = $request->input('n'.$i);
                $f2_dato->c = $request->input('c'.$i);
                $f2_dato->d = $request->input('d'.$i);
                $f2_dato->t = $request->input('t'.$i);
                $f2_dato->lunes = $request->input('lunes'.$i);
                $f2_dato->martes = $request->input('martes'.$i);
                $f2_dato->miercoles = $request->input('mierc'.$i);
                $f2_dato->jueves = $request->input('jueves'.$i);
                $f2_dato->viernes = $request->input('viernes'.$i);
                $f2_dato->save();
            }
        }
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
