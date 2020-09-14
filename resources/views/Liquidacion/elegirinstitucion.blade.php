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
                    <a href="{{ url('/indexliq') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
                    <div class="content ">

<br>
<br>

<form class="form-inline" action="{{route('liquidacion.altaybaja')}}">
<label for="search" class="col-md-3 col-form-label text-md-right">{{ __('Seleccione una institución') }}</label>
            
            <div class="col-md-3">
                <input id="search" type="text" min="0" class="form-control @error('search') is-invalid @enderror" name="search" value="" required autocomplete="search" autofocus>

                @error('search')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
        </form>
<!--

    
            ----------------------------------------------------------------
<div class="form-group row">
        <label for="intitu_elegido" class="col-md-3 col-form-label text-md-right">{{ __('Seleccione una institución') }}</label>
            <div class="btn-group col-md-5 ">
        <select id="intitu_elegido" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="form-control @error('intitu_elegido') is-invalid @enderror" name="intitu_elegido"  required autocomplete="intitu_elegido">
            Left-aligned but right aligned when large screen
        <option value="">Instituciones</option>
        @foreach ($institucion as $item)
        <div class="dropdown-menu dropdown-menu-lg-right">
            <option class="dropdown-item" type="button" value="$item->id">{{ $item->Institucion }}</option>
            
        </div>
        @endforeach
        
        </select>
        </div>
        </div>-->
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