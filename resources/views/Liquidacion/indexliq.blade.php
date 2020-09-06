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
<h4>Seleccione la planilla que desea ver</h4>

<div class="btn-group">

  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Novedades de liquidación
  </button>
  <div class="dropdown-menu dropdown-menu-right">
  <a href="{{ url('indexliq/elegirinstitucion') }}" class="dropdown-item">Planilla de altas y bajas</a>
  <a href="{{ url('indexliq/novedades') }}" class="dropdown-item">Planilla de novedades</a>
  <a href="{{ url('indexliq/otrasnovedades') }}" class="dropdown-item">Otras novedades</a>
    
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
