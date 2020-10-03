<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Documents;
use Illuminate\Support\Facades\Storage;

class AdministracionDocumentos extends Controller
{
    public function vista()
    {   
        $usuario = Auth::user();
        $documentos = Documents::where('user_id', $usuario->id)->get();
          
        //return Storage::response("almacenamiento/documentos/administracion/1601127688generar_comprobante.png");
        $contents = Storage::get('almacenamiento/documentos/administracion/1601127688generar_comprobante.png');    
        
        
        return view('coordPersonal.adminDocumentos', ['usuario'=>$usuario, 'documentos'=>$documentos]);      
    }

    public function agregar(Request $request){
        if($request->hasFile('IdDoc')){
            $file = $request->file('IdDoc');
            $name_file = time().$file->getClientOriginalName();
            $ruta = '/almacenamiento/documentos/administracion/';
            $request->IdDoc->storeAs($ruta, $name_file);
            //$file->move(public_path().$ruta, $name_file);
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
        if($request->info == null){
            $documento->info = "No se agrego descripción"; 
        }
        else{
            $documento->info = $request->info; 
        }
        $documento->user_id = $request->id;
        $documento->URL = $ruta;
        $documento->save();
        return redirect()->back()->with('message', 'documento cargado');
    }

    public function delete($id)
    {   
        $documento = Documents::find($id);
        Storage::delete($documento->URL.$documento->name);
        $documento->delete();
        return back()->withInput();
    }
}
