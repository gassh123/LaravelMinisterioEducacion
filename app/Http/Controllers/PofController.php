<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Persona;
use App\Pof;
use App\Pof_tabla_dato;
use App\Pofaditional;

class PofController extends Controller
{
    public function vista()
    {   
        //dd(Persona::search('alfredo')->get());
        $usuario = Auth::user();
        //$personas=Persona::search('DNI')->where('documento', 40775272)->get();
        //$personas=Persona::search('40775272')->get();
        $personas=Persona::all();
        return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas'=>$personas]); //, compact('personas')
    }

    public function BuscadorPersona(Request $request){
       //$personas =  Persona::search($request->dato)->get();
       $personas2 =  Persona::search('DNI')->where('documento', $request->dato)->get();$usuario = Auth::user();
       //return redirect()->back()->with(['personas' => $personas]);
       $personas=Persona::all();
       return view('plantaOrganica.vista', ['usuario'=>$usuario], ['personas' => $personas], ['personas2'=>$personas2]);
       //return redirect('Pof')->with('personas' , $personas);
    }

    public function AgregarDatosTabla(Request $request){
        $usuario = Auth::user();
        if(is_null($usuario->pof)){ 
            $pof = new Pof();
            $pof->user_id = $usuario->id;
            $pof->institution_id = $usuario->instituciones_id;
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
        
        $usuario = Auth::user();
        if(is_null($usuario->pof)){ 
            $pof = new Pof();
            $pof->user_id = $usuario->id;
            $pof->institution_id = $usuario->instituciones_id;
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

    public function pofPDF(Request $request){
        
        //dd($request);
        /*require_once 'C:\xampp\htdocs\educacion_declarajurada\LaravelMinisterioEducacion\vendor/autoload.php';
        $mpdf=new \Mpdf\Mpdf();
        $data="<h1>datos</h1>";
        $mpdf->WriteHTML($data);
        $mpdf->Output('archivo.pdf', 'D');*/
        $pdf = app('dompdf.wrapper');
        date_default_timezone_set("America/Buenos_Aires");
        switch(date("m")){
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
        $data="<style>h1{ color:red; } table, td, th {
            border: 1px solid black;
          }table{
            width: 100%;
            border-collapse: collapse;
          }</style>
          <h1>Ministerio de educación</h1>
          <table>
            <tr>
                <th colspan='8'>ACTUALIZACIÓN DE DATOS PERSONAL VINCULADO Y TRANSFERIDO</th>
            </tr>
            <tr>
                <th colspan='8'>PERIODO: ".$mes." - ".date("Y")."</th>
            </tr>
            <tr>
                <th>N°</th>
                <th>DNI</th>
                <th>CUIL</th>
                <th>NOMBRE</th>
                <th>CARGO</th>
                <th>FUNCIÓN</th>
                <th>ANTIGÜEDAD</th>
                <th>ÚLTIMO NIVEL DE FORMACION CONCLUIDO</th>
            </tr>"; $j=1;
            for($i = 1; $i <= $request->length ; $i++){
                $dni="documento".$i; $cuil=$i."cuil"; $nombre=$i."apellido_nombre"; $cargo=$i."cargo"; $nomenclador=$i."nomenclador"; 
                $formacion=$i."formacion"; $anti=$i."anti"; 
                if($request->$dni){
                    $data.="<tr>
                    <td>".$j++."</td>
                    <td>".$request->$dni."</td>
                    <td>".$request->$cuil."</td>
                    <td>".$request->$nombre."</td>
                    <td>".$request->$cargo."</td>
                    <td>".$request->$nomenclador."</td>
                    <td>".$request->$formacion."</td>
                    <td>".$request->$anti."</td>
                </tr>";
                }
            }
        $data.="</table><br><br><br><p style:'text-align:center'>__________________________<br>Firma del resp. de área/directivo:</p>";
        $pdf->LoadHTML($data);
        return $pdf->stream('mi-archivo.pdf');
    }
}
