<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class NoveltyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

     public function index(){
            $imagen= App\Imagen::all();
            return view ('novelty.index', compact('imagen'));
            //return auth()->user()->name;
            //return auth()->user()->rol;
      }      

        public function modify(){
            $rol = auth()->user()->rol;
            if($rol=='administrador'){
                $imagen= App\Imagen::all();
                return view ('novelty.modify', compact('imagen'));}
            else{
                return view('welcome');
            }
        }

        public function add(){
            $rol = auth()->user()->rol;
                if($rol=='administrador'){
                return view ('novelty.add');
            }
            else{
                return view('welcome');
            }
        }

        public function store(Request $request){
            //return $request->all();
            $rol = auth()->user()->rol;
            if($rol=='administrador'){
                    $request->validate([

                        'name'=>'required',
                        'URLimagen'=>'required'

                    ]);
                
                $datosNuevos=new App\Imagen;
                $datosNuevos->name = $request->name;
                $datosNuevos->URLimagen = $request->URLimagen;

                if ($datosNuevos->save()) {
                    # code...
                    return back()->with('msj','Datos guardados con éxito.');
                }else{
                    # code...
                    return back()->with('errormsj','Error al guardar los datos.');
                }
            }else{
                return view('welcome');
            }
     }
        
        


    

    public function edith($id){
        $rol = auth()->user()->rol;
        if($rol=='administrador'){        
                $datos=App\Imagen::findOrFail($id);
                return view ('novelty.edith', compact('datos'));
        }else{
            return view('welcome');
        }
        
    }
    public function update(Request $request, $id){
        $rol = auth()->user()->rol;
        if($rol=='administrador'){
            $datosUpdate=App\Imagen::findOrFail($id);
            $datosUpdate->name=$request->name;
            $datosUpdate->URLimagen=$request->URLimagen;

            $datosUpdate->save();

            return back()->with('mensaje','Novedad actualizada.');
        }else{
            return view('welcome');

        }
    }
    public function delete($id){
        $rol = auth()->user()->rol;
        if($rol=='administrador'){
            $datosDelete=App\Imagen::findOrFail($id);
            $datosDelete->delete();
            return back()->with('mensaje','Novedad eliminada.');
        }else{
            return view('welcome');

        }

    }
    

    	
    

}