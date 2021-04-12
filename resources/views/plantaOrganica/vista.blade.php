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
          <button type="submit" class="btn btn-primary" onclick="Buscar(document.getElementById('dato').value)">Buscar persona</button>
        </form>
        @if (isset($personas))
            @foreach ($personas as $persona)
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
                  <button type="button" class="btn btn-success">Agregar</button>
                </div>
            </form>
              <hr>
            @endforeach
        @endif
      <script>
        function Buscar(dato){
          if(dato=''){
            alert("ERROR");
          }
        }
      </script>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Actualización de datos personal vinculado y transferido</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('AgregarDatosTabla') }}" method="POST" id="NewPer">
          @csrf
            <div class="form-group">
              <label for="nombre">Nombre/s:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre/s">
            </div>
            <div class="form-group">
              <label for="apellido">Apellido/s:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Apellido/s">
            </div>
            <div class="form-group">
              <label for="documento">Documento:</label>
              <input type="number" class="form-control" id="documento" name="documento" required placeholder="D.N.I.">
            </div>
            <div class="form-group">
              <label for="cuil">CUIL:</label>
              <input type="number" class="form-control" id="cuil" name="cuil" placeholder="C.U.I.L.">
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
              <label for="nomenclador">Funciones:</label>
              <select class="form-control" id="nomenclador" name="nomenclador">
                <option value="Administración">Administración</option>
                <option value="Servicios Generales">Servicios Generales</option>
                <option value="Otros">Otros</option>
              </select>
            </div>
            <div class="form-group">
              <label for="celular">Celular:</label>
              <input type="text" class="form-control" id="celular" name="celular" required placeholder="Celular">
            </div>
            <div class="form-group">
              <label for="formacion">Último nivel de formación concluido:</label>
              <select class="form-control" id="formacion" name="formacion">
                <option value="Ninguna">Ninguna</option>
                <option value="Inicial">Inicial</option>
                <option value="Primario">Primario</option>
                <option value="Secundario">Secundario</option>
                <option value="Terciario">Terciario</option>
                <option value="Universitario">Universitario</option>
                <option value="Otro">Otro</option>
              </select>
            </div>

            <div class="form-group">
              <label for="antiguedad">Antigüedad:</label>
              <div class="form-row">
                <div class="col">
                  <input type="number" class="form-control" id="antiguedad_n" name="antiguedad_n" required placeholder="N°">
                </div>
                <div class="col">
                  <select class="form-control" id="antiguedad_t" name="antiguedad_t">
                    <option value="Dias">Dia/s</option>
                    <option value="Meses">Mes/es</option>
                    <option value="Años">Año/s</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="nacimiento">Fecha de Nacimiento:</label>
              <input type="date" class="form-control" id="nacimiento" name="nacimiento" required placeholder="xx-xx-xxxx">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="mail" class="form-control" id="email" name="email" required placeholder="ejemplo@mail.com">
            </div>
            <!--<div class="form-group">
              <label for="antiguedad">Domicilio:</label>
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" id="dom_c" name="dom_c" required placeholder="Calle">
                </div>
                <div class="col-xs-4">
                  <input type="number" class="form-control" id="dom_n" name="dom_n" required placeholder="N°">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <input type="number" class="form-control" id="dom_p" name="dom_p" placeholder="Piso">
                </div>
                <div class="col">
                  <input type="number" class="form-control" id="dom_d" name="dom_d" placeholder="Departamento">
                </div>
              </div>
              <label for="localidad">Localidad:</label>
              <select class="form-control" id="localidad" name="localidad">
                <option>Arauco</option>
                <option>Capital</option>
                <option>Castro Barros</option>
                <option>Chamical</option>
                <option>Chilecito</option>
                <option>Coronel Felipe Varela</option>
                <option>Famatina</option>
                <option>General Angel Vicente Peñaloza</option>
                <option>General Belgrano</option>
                <option>General Juan Facundo Quiroga</option>
                <option>General Lamadrid</option>
                <option>General Ocampo</option>
                <option>Genral San Martin</option>
                <option>Independencia</option>
                <option>Rosario Vera Peñaloza</option>
                <option>San Blas de los Sauces</option>
                <option>Sanagasta</option>
                <option>Vinchina</option>
              </select>
            </div>-->

            <div class="form-group">
              <label for="observacion">Observaciones:</label>
              <textarea class="form-control" rows="3" id="observacion" name="observacion"></textarea>
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" style="display:none" id="Go">Añadir</button>
        <button type="button" class="btn btn-success" onclick="confirmar()">Añadir</button>
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <script>
          function confirmar(){
            var acept=confirm("Por favor, confirme el envío de datos. \n EL contenido se considera en calidad de Declaración Jurada.");
            if(acept==true){
              //document.getElementById("NewPer").submit();
              document.getElementById("Go").click();
            }
          }
        </script>
        </div>
      </div>
    </div>
  </div>
@endsection
