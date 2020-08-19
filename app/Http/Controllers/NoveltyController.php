<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class NoveltyController extends Controller
{
    public function index(){
        $imagen= App\Imagen::all();
    	return view ('novelty.index', compact('imagen'));
    }
    public function modify(){
        $imagen= App\Imagen::all();
    	return view ('novelty.modify', compact('imagen'));
    }

    public function add(){
       
    	return view ('novelty.add');
    }

    public function store(Request $request){
        //return $request->all();

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

        
        


    }

    public function edith($id){
        $datos=App\Imagen::findOrFail($id);
    	return view ('novelty.edith', compact('datos'));
    	
    }
    public function update(Request $request, $id){
        $datosUpdate=App\Imagen::findOrFail($id);
        $datosUpdate->name=$request->name;
        $datosUpdate->URLimagen=$request->URLimagen;

        $datosUpdate->save();

        return back()->with('mensaje','Novedad actualizada.');
    }
    public function delete($id){
        $datosDelete=App\Imagen::findOrFail($id);
        $datosDelete->delete();

        return back()->with('mensaje','Novedad eliminada.');

    	
    }

}