@extends('layouts.app')
@section('content')

<div class="container">
    
    @if(session()->has('message'))
        <div class="row justify-content-center">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div>
    @else
        @if ($documentos->isEmpty())
            <div class="row justify-content-center">
                <div class="alert alert-primary" role="alert">
                Aqui puede subir sus documentos con el boton "agregar"
                </div>
            </div> 
        @endif
        
    @endif
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <form  method="POST" action="/agregarDocumento" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="idDoc" name="IdDoc" required>
                        <input id="id" name="id" type="hidden" value={{$usuario->id}}>
                        <br>
                        <label>Agregar informacion</label>
                        <textarea class="form-control" id="informacion"  name="info" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary d-flex justify-content-center">agregar</button>
                    </div>
                    
                </form>
            </div>
            @if($errors->has('IdDoc'))
                <div class="alert alert-danger" role="alert">
                    {{$errors->first('IdDoc')}}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        @foreach ($documentos as $documento)
            @php
                $extension = stristr($documento->name, '.');
            @endphp
            <div  class="card mx-auto mt-2" style="width: 18rem;">
                <div class="card-body" HSPACE="10" VSPACE="10">
                    <div class="mx-auto" style="width: 80%; height= 50%">
                        <img src="@include('coordPersonal/imagenes_documentos')" width="80%" height="50%">
                    </div>
                    <h5 class="card-title" style="font-size: 110%">nombre del documento: {{str_replace($extension, "", $documento->name)}}</h5>
                    <br>
                    <h6 class="card-subtitle mb-2 text-muted">Descripción</h6>
                    <p class="card-text">{{$documento->info}}</p>
                    <hr style="background-color: #6495ed">  
                    <div class="mx-auto" style="width: 150px;">
                        
                        <a href="{{url('/eliminarDoc', ['id'=>$documento->id])}}" class="btn btn-danger mx-auto">Eliminar doc</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection