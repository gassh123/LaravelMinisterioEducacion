@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-20">
        
        @if(session('mensaje'))

<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
</div>
@endif
<a href="{{ url('/indexliq') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
<div class="card">
              
            
                <div class="card-header">{{ __('Otras novedades') }}
                
                </div>
</div>
<br>
                
                    <table class="table table-bordered " >
                    <thead class="table-dark">
                        <tr>
                        <th colspan="5"></th>
                        <th colspan="1" class="text-right-align">Grado</th>
                        <th colspan="3" class="text-center-align">Servicios en el mes</th>
                        
                        <th colspan="2"></th>
                        
                        </tr>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">D.N.I</th>
                        <th scope="col" rowspan="2" valign="middle" >Apellido y Nombres</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Carácter</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Desde</th>
                        <th scope="col">Hasta</th>
                        <th scope="col">Total</th>
                        <th scope="col" style='width: 20%;'>Tipo de novedad-Acto administrativo</th>
                        <th scope="col"  >Observaciones</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($otra_novedad as $item)
                        <tr>
                        <th scope="row">1</th>
                        <td >99.999.999</td>
                        <td >JUAN PEREZ</td>
                        <td>D02</td>
                        <td>T/I/S/V</td>
                        <td>4 G</td>
                        <td>{{$item->desde}}</td>
                        <td>{{$item->hasta}}</td>
                        <td>{{$item->total}}</td>
                        <td >{{$item->tiponovedad}}</td>
                        <td >{{$item->observaciones}}</td>
                        </tr>
                     @endforeach   
                    </tbody>
                    </table>
                </div>
</div>



@endsection