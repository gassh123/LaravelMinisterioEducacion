@extends('layouts.app')

@section('content')


<div class="container">
<a href="{{ url('/indexform') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cargar otras novedades') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('liquidacion.addotrasnovedades')}}">
                        @csrf
                        @if(session('mensaje1'))

                          <div class="alert alert-success" role="alert">{{ session('mensaje1') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          
                          </div>
                        @endif

                        @if(session()->has('mensaje'))
                          <div class="alert alert-danger" role="alert">{{ session('mensaje') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          
                          </div>
                        @endif
                       

                        <div class="form-group row">
                            <label for="desde" class="col-md-4 col-form-label text-md-right">{{ __('Desde') }}</label>

                            <div class="col-md-6">
                                <input id="desde" type="date" min="0" class="form-control @error('desde') is-invalid @enderror" name="desde" value="{{ old('desde') }}" required autocomplete="desde" autofocus>

                                @error('desde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hasta" class="col-md-4 col-form-label text-md-right">{{ __('Hasta') }}</label>

                            <div class="col-md-6">
                                <input id="hasta" type="date" class="form-control @error('hasta') is-invalid @enderror" name="hasta" value="{{ old('hasta') }}" required autocomplete="hasta" autofocus>

                                @error('hasta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total') }}" required autocomplete="total" autofocus>

                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tiponovedad" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de novedad') }}</label>

                            <div class="col-md-6">
                                <input id="tiponovedad" type="text" class="form-control @error('tiponovedad') is-invalid @enderror" name="tiponovedad" value="{{ old('tiponovedad') }}" required autocomplete="tiponovedad" autofocus>

                                @error('tiponovedad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observaciones" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones') }}</label>

                            <div class="col-md-6">
                                <input id="observaciones" type="text" class="form-control @error('observaciones') is-invalid @enderror" name="observaciones" value="{{ old('observaciones') }}" required autocomplete="observaciones" autofocus>

                                @error('observaciones')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                     
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar datos') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection