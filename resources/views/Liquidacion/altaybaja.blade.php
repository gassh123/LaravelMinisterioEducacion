@extends('layouts.app')

@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">-->
        <div class="col-md-20">
        
        @if(session('mensaje'))

<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
</div>
@endif
<a href="{{ url('indexliq/elegirinstitucion') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
<div class="container card">
<form>
    
    
    @foreach ($institucion as $item)
    
        <div class="form-row">
            
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Número</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->cod_escuela}}">
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Institución</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->Institucion}}">
                </div>
        </div>
        <div class="form-row">
            
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Turno</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->turno}}">
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Domicilio</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->domicilio}}">
                </div>
        </div>
        <div class="form-row">
            
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Teléfono</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->telefono}}">
                </div>
                <label for="staticEmail" class="col-sm-1 col-form-label"><b><u>Localidad</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->localidad}}">
                </div>
        </div>
        <div class="form-row">
            
                <label for="staticEmail" class="col-sm-2 col-form-label"><b><u>Departamento</b></u></label>
                <div class="col-sm-5">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$item->departamento}}">
                </div>
                
        </div>
        

    @endforeach
    </form>
    
    
        
    
<br>
<!--TABLA ALTAS Y BAJAS-->

<div class="card">


            
                <div class="card-header">Planilla de Altas y Bajas 
                
                    
                    

                
                
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
                        <th scope="col" style='width: 20%;'>Apellido y Nombres</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Carácter</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Desde</th>
                        <th scope="col">Hasta</th>
                        <th scope="col">Total</th>
                        <th scope="col" style='width: 20%;'>Motivo</th>
                        <th scope="col"  >Observaciones</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($instt as $item)
                    <tr>   
                        
                        <th scope="row">1</th>
                        
                            <td >{{$item->Dni}}</td>
                            <td >{{$item->ApellidoNombre}}</td>
                            <td>{{$item->Cargo}}</td>
                            <td>{{$item->Caracter}}</td>
                            <td>{{$item->GradoSeccion}}</td>
                            @endforeach
                    @foreach ($inst as $item)
                    
                                <td>{{$item->desdeAB}}</td>
                                <td>{{$item->hastaAB}}</td>
                                <td>{{$item->totalAB}}</td>
                                <td >{{$item->motivo}}</td>
                                <td >{{$item->observacionesAB}}</td>
                            
                            </tr>
                        
                    @endforeach 
                     
                    </tbody>
                    </table>
                </div>
</div>
@endsection