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
<a href="{{ url('/indexliq') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
<!--DATOS INSTITUCION-->
<div class="card">
              
            
                <div class="card-header">{{ __('Ingrese los datos de la institución') }}
                
                </div>
</div>
<br>

<form method="POST" action="{{route('liquidacion.filtrarinstitucion')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="idinst" class="col-md-4 col-form-label text-md-right">{{ __('institucion_id') }}</label>

                            <div class="col-md-6">
                                <input id="idinst" type="number" min="0" class="form-control @error('idinst') is-invalid @enderror" name="idinst" value="" required autocomplete="idinst" autofocus>

                                @error('idinst')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Listo') }}
                                </button>
                            </div>
                        </div>
                    </form>
<br>
<!--TABLA ALTAS Y BAJAS-->

<!--
    <div class="form-group row">
        <label for="nombreesc" class="col-md-3 col-form-label text-md-right">{{ __('Nombre') }}</label>
            <div class="btn-group col-md-5 ">
        <select id="nombreesc" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="form-control @error('nombreesc') is-invalid @enderror" name="nombreesc"  required autocomplete="nombreesc">
            Left-aligned but right aligned when large screen
        <option value="">Escoja una institución</option>
       
        <div class="dropdown-menu dropdown-menu-lg-right">
            <option class="dropdown-item" type="button" value=""></option>
            
        </div>
        
        
        </select>
        </div>
        

       

            @error('nombreesc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="categoria" class="col-md-3 col-form-label text-md-right">{{ __('Categoria') }}</label>
        
        <div class="col-md-3">
            <input id="categoria" type="text" min="0" class="form-control @error('categoria') is-invalid @enderror" name="categoria" value="" required autocomplete="categoria" autofocus>

            @error('categoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <label for="turno" class="col-md-1 col-form-label text-md-right">{{ __('Turno') }}</label>
        
        <div class="col-md-3">
            <input id="turno" type="text" min="0" class="form-control @error('turno') is-invalid @enderror" name="turno" value="" required autocomplete="turno" autofocus>

            @error('turno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>  
             
    </div>
    <div class="form-group row">
    <label for="domicilio" class="col-md-3 col-form-label text-md-right">{{ __('Domicilio') }}</label>
    
        <div class="col-md-3">
            <input id="domicilio" type="text" min="0" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="" required autocomplete="domicilio" autofocus>

            @error('domicilio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <label for="telefono" class="col-md-1 col-form-label text-md-right">{{ __('Teléfono') }}</label>

        <div class="col-md-3">
            <input id="telefono" type="text" min="0" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="" required autocomplete="telefono" autofocus>

            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>
        <div class="form-group row">
            <label for="localidad" class="col-md-3 col-form-label text-md-right">{{ __('Localidad') }}</label>

            <div class="col-md-3">
                <input id="localidad" type="text" min="0" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="" required autocomplete="localidad" autofocus>

                @error('localidad')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="departamento" class="col-md-1 col-form-label text-md-right">{{ __('Depto.') }}</label>

            <div class="col-md-3">
                <input id="departamento" type="text" min="0" class="form-control @error('departamento') is-invalid @enderror" name="departamento" value="" required autocomplete="departamento" autofocus>

                @error('departamento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>   

    </div>-->
    

@endsection