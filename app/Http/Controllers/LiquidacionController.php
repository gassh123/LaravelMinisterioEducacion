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
    public function index(){
        return view('liquidacion.index');
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
}


?>