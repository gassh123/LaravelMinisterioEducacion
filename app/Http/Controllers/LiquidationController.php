<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class LiquidationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('liquidation.index');
    }
    public function altaybaja(){
        return view('liquidation.altaybaja');
    }
    public function novedades(){
        return view('liquidation.novedades');
    }
    public function otrasnovedades(){
        return view('liquidation.otrasnovedades');
    }
}


?>