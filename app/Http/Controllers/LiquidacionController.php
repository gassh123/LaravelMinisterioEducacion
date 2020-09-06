<?php 
namespace App\Http\Controllers;
//namespace App\Http\Controllers\Institucion\Controller;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;


class LiquidacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*LIQUIDACION*/
    public function index(){
        return view('liquidacion.indexliq');
    }
    public function elegirinstitucion(){
        //return 'Hola';
        return view('liquidacion.elegirinstitucion');
    }
    public function filtrarinstitucion(Request $request){
      //  $sql= 'SELECT * FROM docentes INNER JOIN institucions ON docentes.institucion_id=institucions.id';
        //$altabaja= DB::select($sql);
       // 
        $request->validate([
            'idinst'=>'required',
        ]);
        $datosNuevos=new App\Institucion;
        $datosNuevos->idinst = $request->idinst;
        
        //$existencia = DB::table('institucions')   //realizo la sentencia para saber si existe
        //    ->select('id')
        //    ->where('id', '=', $datosNuevos)
        //    ->get();
       // $note = DB::table('docentes')->pluck('institucion_id');
        $note2 = DB::table('institucions')->pluck('id');
        //$institucion = Institucion::where('id', '=', Input::get('idinst'))->first();
        $institucion = App\Institucion::firstOrNew(['id' => $datosNuevos]);
        if ( $note2== $institucion) {
               
               // return 'Anda';
               
                return  $this->altaybaja();
            }else {
                return 'No anda';
            }
       
       // if ($datosNuevos) {
            # code...
        //    return ;
       // }
        //else{
            # code...
       //     return back()->with('mensaje','No agregó ninguna institución.');
      //  }
    }
    public function altaybaja(){
        
        //$docente=App\Docente::findOrFail(2);
        //return $docente->altabajas;
       // $institucion=App\Institucion::findOrFail(1);
       // return $institucion->docentes;
        $sql= 'SELECT * FROM docentes d, altabajas a, institucions i WHERE a.docente_id=d.id and d.institucion_id=i.id';
        $altabaja= DB::select($sql);
       // $institucion=App\Institucion::all();
        //$docente=App\Docente::all();
        
       return view ('liquidacion.altaybaja', compact('altabaja'));
       // return view ('liquidacion.altaybaja', compact('institucion'));
    }
    public function novedades(){
        $novedad= App\Novedad::all();
        return view ('liquidacion.novedades', compact('novedad'));
        
    }
    public function otrasnovedades(){
        $otra_novedad= App\Otra_novedad::all();
        return view ('liquidacion.otrasnovedades', compact('otra_novedad'));
       
    }
    /*FORMULARIO*/
    public function indexform(){
        return view('liquidacion.indexform');
    }
    public function institucionform(){
        return view('liquidacion.institucionform');
    }
    public function docenteform(){
        return view('liquidacion.docenteform');
    }
    public function altaybajaform(){
       // $institucion=App\Institucion::all();
      //  $docente=App\Docente::all();
        return view('liquidacion.altaybajaform');
        //,compact('institucion'),compact('docente')
    }
    public function novedadesform(){
        return view('liquidacion.novedadesform');
    }
    public function otrasnovedadesform(){
        return view('liquidacion.otrasnovedadesform');
    }
    public function addinstitucion(Request $request){
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
                    
    
        $datosNuevos=new App\Institucion;
        $datosNuevos->cod_escuela = $request->cod_escuela;
        $datosNuevos->Institucion = $request->Institucion;
        $datosNuevos->ctg = $request->ctg;
        $datosNuevos->turno = $request->turno;
        $datosNuevos->domicilio = $request->domicilio;
        $datosNuevos->telefono = $request->telefono;
        $datosNuevos->localidad = $request->localidad;
        $datosNuevos->departamento = $request->departamento;

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Institución agregada.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ninguna institución.');
        }
    }

    public function adddocente(Request $request){
        $request->validate([

            'institucion_id'=>'required',
            'Dni'=>'required',
            'ApellidoNombre'=>'required',
            'Cargo'=>'required',
            'Caracter'=>'required',
            'GradoSeccion'=>'required',
            

        ]);
                    
    
        $datosNuevos=new App\Docente;
        $datosNuevos->institucion_id = $request->institucion_id;
        $datosNuevos->Dni = $request->Dni;
        $datosNuevos->ApellidoNombre = $request->ApellidoNombre;
        $datosNuevos->Cargo = $request->Cargo;
        $datosNuevos->Caracter = $request->Caracter;
        $datosNuevos->GradoSeccion = $request->GradoSeccion;
        

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Docente agregado.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ningun docente.');
        }
    }

    public function addaltaybaja(Request $request){
        $request->validate([

            'docente_id'=>'required',
            'desdeAB'=>'required',
            'hastaAB'=>'required',
            'totalAB'=>'required',
            'motivo'=>'required',
            'observacionesAB'=>'required',
            

        ]);
                    
    
        $datosNuevos=new App\Altabaja;
        $datosNuevos->desdeAB = $request->desdeAB;
        $datosNuevos->docente_id = $request->docente_id;
        $datosNuevos->hastaAB = $request->hastaAB;
        $datosNuevos->totalAB = $request->totalAB;
        $datosNuevos->motivo = $request->motivo;
        $datosNuevos->observacionesAB = $request->observacionesAB;
        

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Alta/Baja agregada.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ningun alta/baja.');
        }
    }

    public function addnovedades(Request $request){
        $request->validate([

            'desdeN'=>'required',
            'hastaN'=>'required',
            'totalN'=>'required',
            'articulo'=>'required',
            'observacionesN'=>'required',
            

        ]);
                    
    
        $datosNuevos=new App\Novedad;
        $datosNuevos->desdeN = $request->desdeN;
        $datosNuevos->hastaN = $request->hastaN;
        $datosNuevos->totalN = $request->totalN;
        $datosNuevos->articulo = $request->articulo;
        $datosNuevos->observacionesN = $request->observacionesN;
        

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Novedad agregada.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ninguna novedad.');
        }
    }

    public function addotrasnovedades(Request $request){
        $request->validate([

            'desdeON'=>'required',
            'hastaON'=>'required',
            'totalON'=>'required',
            'tiponovedad'=>'required',
            'observacionesON'=>'required',
            

        ]);
                    
    
        $datosNuevos=new App\Otranovedad;
        $datosNuevos->desdeON = $request->desdeON;
        $datosNuevos->hastaON = $request->hastaON;
        $datosNuevos->totalON = $request->totalON;
        $datosNuevos->tiponovedad = $request->tiponovedad;
        $datosNuevos->observacionesON = $request->observacionesON;
        

        if ($datosNuevos->save()) {
            # code...
            return back()->with('mensaje1','Otra novedad agregada.');
        }else{
            # code...
            return back()->with('mensaje','No agregó ninguna otra novedad.');
        }
    }
    
}


?>