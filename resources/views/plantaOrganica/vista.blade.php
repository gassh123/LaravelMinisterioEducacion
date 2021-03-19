@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="d-flex flex-row bd-highlight mb-3">
      <div class="col-4">
        <form method="POST" action="{{ route('BuscadorPersona') }}" enctype="multipart/form-data">
          @csrf 
          <div class="mb-3">
            <label>Documento</label>
            <input type="text" class="form-control" name='dato' id='dato'>
          </div>
          <button type="submit" class="btn btn-primary">Buscar persona</button>
        </form>
        
        @if (Session::get('personas') != NULL)
            @foreach (Session::get('personas') as $persona)
            
            <form method="POST" action="{{ route('AgregarDatosTabla') }}" enctype="multipart/form-data">
              @csrf
                <div class="card" style="width: 18rem; background-color:#d1e2d9">
                  <div class="card-body">
                    <h5 class="card-title">{{$persona->nombre}}</h5>
                    <h5 class="card-subtitle mb-2 text-muted">{{$persona->apellido}}</h6>
                    <h5 class="card-subtitle mb-2 text-muted">{{$persona->documento}}</h5>
                  </div>
                  <input type="hidden" id="apellido" name="apellido" value="{{$persona->apellido}}">
                  <input type="hidden" id="nombre" name="nombre" value="{{$persona->nombre}}">
                  <input type="hidden" id="documento" name="documento" value="{{$persona->documento}}">
                  <input type="hidden" id="cuil" name="cuil" value="{{$persona->cuil}}">
                  <button type="submit" class="btn btn-success">Agregar</button>
                </div>
            </form>
              <hr>
            @endforeach
        @endif
      
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      </div>
      <div class="col-4"></div>
      <div class="col-4">
        <a href="#" class="btn btn-primary btn-lg fas fa-user" tabindex="-1" role="button" aria-disabled="true"><p>Agregar</p></a>
      </div>
    </div>
    @if ($usuario->pof)
          @include('plantaOrganica/tabla')      
    @endif 
  </div> 
@endsection

