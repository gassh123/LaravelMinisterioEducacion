<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Persona;
use App\Pof;
use App\Pof_tabla_dato;
use App\Pofaditional;
use App\Institution;
use App\Director;
use App\JefeArea;

class PofController extends Controller
{
    public function vista()
    {   
        //dd(Persona::search('alfredo')->get());
        $usuario = Auth::user();
        //$personas=Persona::search('DNI')->where('documento', 40775272)->get();
        //$personas=Persona::search('40775272')->get();
        $personas=Persona::all();
        $pofaditional=Pofaditional::all();
        //$pofaditional=Pofaditional::where('pof_tabla_datos_id', );
        $director=Director::where('users_id', $usuario->id)->first();
        $jefearea=JefeArea::where('users_id', $usuario->id)->first();
        if(isset($director)){
            $institucion=Institution::where('id', $director->instituciones_id)->first();
            return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas'=>$personas])->with('adicional', $pofaditional)->with('institucion', $institucion); //, compact('personas')
        }else if(isset($jefearea)){
            return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas'=>$personas])->with('adicional', $pofaditional)->with('area', $jefearea); 
        }else{
            if($usuario->rol=="Directivo"){
                $instituciones=Institution::all();
                //return view('plantaOrganica.user_type', ['usuario'=>$usuario])->with('instituciones', $instituciones);
            }else if($usuario->rol=="JefeArea"){
                return view('plantaOrganica.user_type', ['usuario'=>$usuario]);
            }
        }
        //return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas'=>$personas])->with('adicional', $pofaditional)->with('institucion', $institucion); //, compact('personas')
    }

    public function BuscadorPersona(Request $request){
       //$personas =  Persona::search($request->dato)->get();
       $personas2 =  Persona::search('DNI')->where('documento', $request->dato)->get();$usuario = Auth::user();
       //return redirect()->back()->with(['personas' => $personas]);
       $personas=Persona::all();
       $pofaditional=Pofaditional::all();
       $director=Director::where('users_id', $usuario->id)->first();
       $jefearea=JefeArea::where('users_id', $usuario->id)->first();
       if(isset($director)){
        $institucion=Institution::where('id', $usuario->instituciones_id)->first();
        return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas2'=>$personas2])->with('adicional', $pofaditional)->with('personas', $personas)->with('institucion', $institucion);
       }else{
        return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas2'=>$personas2])->with('adicional', $pofaditional)->with('personas', $personas)->with('area', $jefearea);
       }
       //return redirect('Pof')->with('personas' , $personas);
    }

    public function AgregarDatosTabla(Request $request){
        $usuario = Auth::user(); $director=Director::where('users_id', $usuario->id)->first(); $jefearea=JefeArea::where('users_id', $usuario->id)->first();
        if(is_null($usuario->pof)){ 
            $pof = new Pof();
            $pof->user_id = $usuario->id;
            //
            //$pof->institution_id = $usuario->instituciones_id;
            if(isset($director)){
                $pof->institution_id = $director->instituciones_id;
            }else{
                $pof->institution_id = 0;
            }
            //
            $pof->save();
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;
            $pof_tabla_dato->celular = $request->celular;
            $pof_tabla_dato->cargo = $request->cargo;
            $pof_tabla_dato->nomenclador = $request->nomenclador;
            $pof_tabla_dato->formacion = $request->formacion;
            $pof_tabla_dato->save();

            $pofaditional = new Pofaditional();
            $pofaditional->pof_tabla_datos_id=$pof_tabla_dato->id;
            $pofaditional->dni=$request->documento;
            $pofaditional->domicilio=$request->dom_c.' N° '.$request->dom_n;
            if(isset($request->dom_p)){
                $pofaditional->domicilio.=' piso: '.$request->dom_p." departamento: ".$request->dom_d;
            }
            $pofaditional->turno=$request->turno;
            $pofaditional->virtualidad=$request->virtualidad;
            $pofaditional->licencia=$request->licencia;
            if(isset($request->dom_p)){
                $pofaditional->reincorporacion=$request->reincorporacion;
            }
            $pofaditional->save();
        }else{
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $usuario->pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;  
            $pof_tabla_dato->celular = $request->celular;
            $pof_tabla_dato->cargo = $request->cargo;
            $pof_tabla_dato->nomenclador = $request->nomenclador;
            $pof_tabla_dato->formacion = $request->formacion;
            $pof_tabla_dato->save();
            $pofaditional = new Pofaditional();
            $pofaditional->pof_tabla_datos_id=$pof_tabla_dato->id;
            $pofaditional->dni=$request->documento;
            $pofaditional->domicilio=$request->dom_c.' N° '.$request->dom_n;
            if(isset($request->dom_p)){
                $pofaditional->domicilio.=' piso: '.$request->dom_p." departamento: ".$request->dom_d;
            }
            $pofaditional->turno=$request->turno;
            $pofaditional->virtualidad=$request->virtualidad;
            $pofaditional->licencia=$request->licencia;
            if(isset($request->dom_p)){
                $pofaditional->reincorporacion=$request->reincorporacion;
            }
            $pofaditional->save();
        }
        return redirect('Pof')->with('status', 'Persona agregada al listado de la planta organizacional');
     }

    public function AgregarDatosPersona(Request $request){
        $newPersona = new Persona(); 
        $newPersona->documento = $request->documento;
        $newPersona->tipo_doc='DNI';
        $newPersona->apellido=$request->apellido;
        $newPersona->nombre=$request->nombre;
        $newPersona->fnac=$request->nacimiento; 
        $newPersona->cuil = $request->cuil;
        $newPersona->est_civil=$request->est_civil; 
        $newPersona->anti_doc=$request->anti_doc; 
        $newPersona->fec_i_doc=$request->fec_i_doc;
        $newPersona->anti_adm=$request->anti_adm; 
        $newPersona->fec_i_adm=$request->fec_i_adm; 
        $newPersona->numero_telefono = $request->celular;
        $newPersona->ultimo_nivel_formación_Concluido = $request->formacion;     
        $newPersona->save();
        
        $usuario = Auth::user(); $director=Director::where('users_id', $usuario->id)->first(); $jefearea=JefeArea::where('users_id', $usuario->id)->first();
        if(is_null($usuario->pof)){ 
            $pof = new Pof();
            $pof->user_id = $usuario->id;
            //
            //$pof->institution_id = $usuario->instituciones_id;
            if(isset($director)){
                $pof->institution_id = $director->instituciones_id;
            }else{
                $pof->institution_id = 0;
            }
            //
            $pof->save();
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;
            $pof_tabla_dato->celular = $request->celular;
            $pof_tabla_dato->cargo = $request->cargo;
            $pof_tabla_dato->nomenclador = $request->nomenclador;
            $pof_tabla_dato->formacion = $request->formacion;
            $pof_tabla_dato->save();
            $pofaditional = new Pofaditional();
            $pofaditional->pof_tabla_datos_id=$pof_tabla_dato->id;
            $pofaditional->dni=$request->documento;
            $pofaditional->domicilio=$request->dom_c.' N° '.$request->dom_n;
            if(isset($request->dom_p)){
                $pofaditional->domicilio.=' piso: '.$request->dom_p." departamento: ".$request->dom_d;
            }
            $pofaditional->turno=$request->turno;
            $pofaditional->virtualidad=$request->virtualidad;
            $pofaditional->licencia=$request->licencia;
            if(isset($request->dom_p)){
                $pofaditional->reincorporacion=$request->reincorporacion;
            }
            $pofaditional->save();
        }else{
            $pof_tabla_dato = new Pof_tabla_dato();
            $pof_tabla_dato->pof_id = $usuario->pof->id;
            $pof_tabla_dato->documento_tipo = $request->documento;
            $pof_tabla_dato->cuil = $request->cuil;
            $pof_tabla_dato->apellido_nombre = $request->apellido.' '.$request->nombre;  
            $pof_tabla_dato->celular = $request->celular;
            $pof_tabla_dato->cargo = $request->cargo;
            $pof_tabla_dato->nomenclador = $request->nomenclador;
            $pof_tabla_dato->formacion = $request->formacion;
            $pof_tabla_dato->save();
            $pofaditional = new Pofaditional();
            $pofaditional->pof_tabla_datos_id=$pof_tabla_dato->id;
            $pofaditional->dni=$request->documento;
            $pofaditional->domicilio=$request->dom_c.' N° '.$request->dom_n;
            if(isset($request->dom_p)){
                $pofaditional->domicilio.=' piso: '.$request->dom_p." departamento: ".$request->dom_d;
            }
            $pofaditional->turno=$request->turno;
            $pofaditional->virtualidad=$request->virtualidad;
            $pofaditional->licencia=$request->licencia;
            if(isset($request->dom_p)){
                $pofaditional->reincorporacion=$request->reincorporacion;
            }
            $pofaditional->save();
        }
        return redirect('Pof')->with('status', 'Persona agregada al listado de la planta organizacional');
    }
    
     public function eliminar($id, $id_tabla){
        
        $pofaditional = Pofaditional::find($id_tabla)->delete;

        $pof_tabla_dato = Pof_tabla_dato::find($id_tabla)->delete();
        $pof = Pof::find($id);
        //dd($pof->pof_tabla_dato->isEmpty());
        if($pof->pof_tabla_dato->isEmpty()){   
            $pof->delete();
        }
        
        return redirect()->back();
    }

    public function CreatePof(Request $request){
        $usuario = Auth::user();
        if($usuario->rol=="Directivo"){
            $director = new Director();
            $director->users_id=$usuario->id;
            $director->instituciones_id=$request->institution;
            $director->save();
        }else if($usuario->rol=="JefeArea"){
            $jefearea = new JefeArea();
            $jefearea->users_id=$usuario->id;
            $jefearea->area=$request->area;
            $jefearea->save();
        }
        return redirect('home');
    }

    public function pofPDF(Request $request){
        $usuario = Auth::user(); $director=Director::where('users_id', $usuario->id)->first(); $jefearea=JefeArea::where('users_id', $usuario->id)->first();
        if(isset($director)){
            $institucion=Institution::where('id', $usuario->instituciones_id)->first();
        }
        //dd($request);
        /*require_once 'C:\xampp\htdocs\educacion_declarajurada\LaravelMinisterioEducacion\vendor/autoload.php';
        $mpdf=new \Mpdf\Mpdf();
        $data="<img src='Logo.png'>";
        $mpdf->WriteHTML($data);
        $mpdf->Output('archivo.pdf', 'D');*/
        $pdf = app('dompdf.wrapper');
        //$institution =  Institution::search('DNI')->where('documento', $request->dato)->get();
        date_default_timezone_set("America/Buenos_Aires");
        switch(date("m")+1){
            case 1: $mes="Enero";
                break;
            case 2: $mes="Febrero";
                break;
            case 3: $mes="Marzo";
                break;
            case 4: $mes="Abril";
                break;
            case 5: $mes="Mayo";
                break;
            case 6: $mes="Junio";
                break;
            case 7: $mes="Julio";
                break;
            case 8: $mes="Agosto";
                break;
            case 9: $mes="Septiembre";
                break;
            case 10: $mes="Octubre";
                break;
            case 11: $mes="Noviembre";
                break;
            case 12: $mes="Diciembre";
                break;
            default: $mes="Error";
                break;
        }
        $data="<style>h1{ color:red; } table{
            width: 100%;
            border-collapse: collapse;
          }
          table.ppal td, th{
            border: 1px solid black;
          }</style>
          <img src='Logo.png'>
          <table class='ppal'>
            <tr>
                <th colspan='8' style='background-color: #1F497D; color:white;'>ACTUALIZACIÓN DE DATOS PERSONAL VINCULADO Y TRANSFERIDO</th>
            </tr>";
        if(isset($director)){
            $data.="<tr style='background-color: #538DD5; color: white;'>
                <th colspan='5'>ESCUELA: ".$institucion->nombre."</th>
                <th colspan='3'>C.U.E.: ".$institucion->cue."</th>
            </tr>
            <tr style='background-color: #538DD5; color: white;'>
                <th colspan='3'>DOMICILIO: ".$institucion->domicilio."</th>
                <th colspan='3'>LOCALIDAD: ".$institucion->localidad.", ".$request->departamento."</th>
                <th colspan='1'>ZONA: ".$institucion->zona."</th>
                <th colspan='1'>ÁMBITO: ".$request->ambito."</th>
            </tr>";
        }else{
            $data.="<tr style='background-color: #538DD5; color: white;'>
                <th colspan='8'>AREA ADMINISTRADOR</th>
            </tr>
            <tr style='background-color: #538DD5; color: white;'>
                <th colspan='5'>DEPARTAMENTO: ".$request->departamento."</th>
                <th colspan='3'>ZONA: ".$jefearea->area."</th>
            </tr>";
        }
        $data.="<tr>
                <th colspan='8'>PERIODO: ".$mes." - ".date("Y")."</th>
            </tr>
            <tr>
                <th>N°</th>
                <th>DNI</th>
                <th>CELULAR</th>
                <th>APELLIDOS Y NOMBRES</th>
                <th>CARGO / MODALIDAD DE CONTRATACIÓN</th>
                <th>FUNCIÓN</th>
                <th>ANTIGÜEDAD EN EL MINISTERIO DE EDUCACIÓN</th>
                <th>ÚLTIMO NIVEL DE FORMACION CONCLUIDO</th>
            </tr>"; $j=1;
            for($i = 1; $i <= $request->length ; $i++){
                $dni="documento".$i; $celular=$i."celular"; $nombre=$i."apellido_nombre"; $cargo=$i."cargo"; $nomenclador=$i."nomenclador"; 
                $formacion=$i."formacion"; $anti=$i."anti"; 
                if($request->$dni){
                    $data.="<tr>
                    <td>".$j++."</td>
                    <td>".$request->$dni."</td>
                    <td>".$request->$celular."</td>
                    <td>".$request->$nombre."</td>
                    <td>".$request->$cargo."</td>
                    <td>".$request->$nomenclador."</td>
                    <td>".$request->$anti."</td>
                    <td>".$request->$formacion."</td>
                </tr>";
                }
            }
        $data.="</table><br><p>La información consignada precedentemente reviste carácter de <b>declaración jurada</b>. La falsedad en los datos, dará lugar al inicio del correspondiente trámite administrativo.</p><br>";
        $data.="<table>
            <tr>
                <td style='border: 1px solid black; height:50px;'>Firma del resp. de área/directivo:</td>
                <td style='border-top: white; border-bottom: white;'></td>
                <td style='border: 1px solid black;'>Firma del supervisor:</td>
            </tr>
            <tr>
                <td style='border: 1px solid black;height:50px;'>Aclaración y  DNI:</td>
                <td style='border-top: white; border-bottom: white;'></td>
                <td style='border: 1px solid black;'>Aclaración y  DNI:</td>
            </tr>
            <tr>
                <td style='border: 1px solid black;height:50px;'>Celular:</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style='border: 1px solid black;height:50px;'>Fecha:</td>
                <td></td>
                <td></td>
            </tr>
        </table>";
        $pdf->LoadHTML($data);
        return $pdf->stream('mi-archivo.pdf');
        //echo $data;
    }
}
