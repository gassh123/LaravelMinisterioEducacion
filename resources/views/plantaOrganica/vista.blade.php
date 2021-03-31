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
            {{$persona->apellido}}
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
        <a href="#" class="btn btn-primary btn-lg fas fa-user" tabindex="-1" role="button" aria-disabled="true" data-toggle="modal" data-target="#add"><p>Agregar</p></a>
      </div>
    </div>
    @if ($usuario->pof)
          @include('plantaOrganica/tabla')
    @endif
  </div> 
        <!-- Añadir al personal-->
  <div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de datos personal vinculado y transferido</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('AgregarDatosTabla') }}" method="POST">
          @csrf
            <div class="form-group">
              <label for="nombre">Nombre/s:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
              <label for="apellido">Apellido/s:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
              <label for="documento">Documento:</label>
              <input type="number" class="form-control" id="documento" name="documento" required>
            </div>
            <div class="form-group">
              <label for="cuil">CUIL:</label>
              <input type="number" class="form-control" id="cuil" name="cuil" required>
            </div>
            <div class="form-group">
              <label for="cargo">Cargo:</label>
              <select class="form-control" id="cargo" name="cargo">
                <option value="G06">Servicios Generales (transferidos)</option>
                <option value="CP">Contrato Provincia</option>
                <option value="CM">Contrato Municipio</option>
                <option value="BP">Beca Provincia</option>
                <option value="BM">Beca Municipio</option>
                <option value="TP">Tutoría Provincia</option>
                <option value="VS">Otros (especificar en observaciones)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nomenclador">Nomenclador:</label>
              <input type="text" class="form-control" id="nomenclador" name="nomenclador" required>
            </div>
            <div class="form-group">
              <label for="celular">Celular:</label>
              <input type="text" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group">
              <label for="formacion">Último nivel de formación concluido:</label>
              <select class="form-control" id="formacion" name="formacion">
                <option value="Inicial">Inicial</option>
                <option value="Primario">Primario</option>
                <option value="Secundario">Secundario</option>
                <option value="Terciario">Terciario</option>
                <option value="Universitario">Universitario</option>
              </select>
            </div>
            <div class="form-group">
              <label for="observacion">Observaciones:</label>
              <textarea class="form-control" rows="3" id="observacion" name="observacion"></textarea>
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success">Añadir</button>
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
@endsection

