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

<form class="form-inline" action="{{route('liquidacion.listado')}}">

<label for="search" class="col-md-3 col-form-label text-md-right">{{ __('Seleccione un tipo de planilla') }}</label>
            
            <div class="col-md-3">
                <input id="search" type="text" min="0" class="form-control @error('search') is-invalid @enderror" name="search" value="" required autocomplete="search" autofocus>

                @error('search')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

            
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
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