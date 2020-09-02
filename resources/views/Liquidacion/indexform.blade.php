@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <!--  <div class="card-header">{{ __('Dashboard') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="content ">

<br>
<br>
<div class="title m-b-md">
<h4>¿Qué desea agregar?</h4>

<div class="btn-group">

  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Seleccionar
  </button>
  <div class="dropdown-menu dropdown-menu-right">
  <a href="{{ url('indexform/institucionform') }}" class="dropdown-item">Institución</a>
  <a href="{{ url('indexform/docenteform') }}" class="dropdown-item">Docente</a>
  <a href="{{ url('indexform/altaybajaform') }}" class="dropdown-item">Alta y baja</a>
  <a href="{{ url('indexform/novedadesform') }}" class="dropdown-item">Novedad</a>
  <a href="{{ url('indexform/otrasnovedadesform') }}" class="dropdown-item">Otra novedad</a>
    
  </div>
</div>
</div>
</div>

                
            </div>
                

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection