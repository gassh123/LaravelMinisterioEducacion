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
        <div class="row justify-content-center">
            <div class="alert alert-primary" role="alert">
            Aqui puede subir sus documentos con el boton "agregar"
            </div>
        </div>
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
</div>

@endsection