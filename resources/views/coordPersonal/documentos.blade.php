@extends('layouts.app')
@section('content')

<div class="container">

    <h2>Documentos para descargar</h2>
    
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
                    Todavia no se agregaron documentos.
                </div>
            </div> 
        @endif
        
    @endif
    <div class="row justify-content-center">
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
                        
                        <a href="{{url('/descargarDoc', ['id'=>$documento->id])}}" class="btn btn-success mx-auto">Descagar documento</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection