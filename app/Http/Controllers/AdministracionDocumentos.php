<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Documents;

class AdministracionDocumentos extends Controller
{
    public function vista()
    {   
        $usuario = Auth::user();
        
        return view('coordPersonal.adminDocumentos')->with('usuario', $usuario);
    }

    public function agregar(Request $request){
        if($request->hasFile('IdDoc')){
            $file = $request->file('IdDoc');
            $name_file = time().$file->getClientOriginalName();
            $ruta = '/almacenamiento/documentos/administracion/';
            $file->move(public_path().$ruta, $name_file);
        }
        else{
            $data = request()->validate([
                'IdDoc' =>'required'
            ],[
                'IdDoc.required'=>'Es requerido ingresar un documento'
            ]);
        }
        $documento = new Documents();
        $documento->name = $name_file;
        $documento->info = $request->info;
        $documento->user_id = $request->id;
        $documento->URL = $ruta;
        $documento->save();
        return redirect()->back()->with('message', 'documento cargado');
    }
}
