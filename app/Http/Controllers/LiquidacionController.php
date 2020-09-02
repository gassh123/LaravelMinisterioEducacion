<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


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
    public function altaybaja(){
        return view('liquidacion.altaybaja');
    }
    public function novedades(){
        return view('liquidacion.novedades');
    }
    public function otrasnovedades(){
        return view('liquidacion.otrasnovedades');
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
        return view('liquidacion.altaybajaform');
    }
    public function novedadesform(){
        return view('liquidacion.novedadesform');
    }
    public function otrasnovedadesform(){
        return view('liquidacion.otrasnovedadesform');
    }
}


?>