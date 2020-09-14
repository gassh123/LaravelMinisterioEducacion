@extends('layouts.app')

@section('content')


<div class="container">
<a href="{{ url('/indexform') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar docente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('liquidacion.adddocente')}}">
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
                            <label for="Dni" class="col-md-4 col-form-label text-md-right">{{ __('D.N.I.') }}</label>

                            <div class="col-md-6">
                                <input id="Dni" type="number" min="0" class="form-control @error('Dni') is-invalid @enderror" name="Dni" value="{{ old('Dni') }}" required autocomplete="Dni" autofocus>

                                @error('Dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ApellidoNombre" class="col-md-4 col-form-label text-md-right">{{ __('Apellido y Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="ApellidoNombre" type="text" class="form-control @error('ApellidoNombre') is-invalid @enderror" name="ApellidoNombre" value="{{ old('ApellidoNombre') }}" required autocomplete="ApellidoNombre" autofocus>

                                @error('ApellidoNombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="institucion_id" class="col-md-4 col-form-label text-md-right">{{ __('Institucion_id') }}</label>

                            <div class="col-md-6">
                                <input id="institucion_id" type="text" class="form-control @error('institucion_id') is-invalid @enderror" name="institucion_id" value="{{ old('institucion_id') }}" required autocomplete="institucion_id" autofocus>

                                @error('ApellidoNombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Cargo" class="col-md-4 col-form-label text-md-right">{{ __('Cargo') }}</label>

                            <div class="col-md-6">
                                <input id="Cargo" type="text" class="form-control @error('Cargo') is-invalid @enderror" name="Cargo" value="{{ old('Cargo') }}" required autocomplete="Cargo" autofocus>

                                @error('Cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Caracter" class="col-md-4 col-form-label text-md-right">{{ __('Carácter') }}</label>

                            <div class="col-md-6">
                                <input id="Caracter" type="text" class="form-control @error('Caracter') is-invalid @enderror" name="Caracter" value="{{ old('Caracter') }}" required autocomplete="Caracter" autofocus>

                                @error('Caracter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="GradoSeccion" class="col-md-4 col-form-label text-md-right">{{ __('Grado') }}</label>

                            <div class="col-md-6">
                                <input id="GradoSeccion" type="text" class="form-control @error('GradoSeccion') is-invalid @enderror" name="GradoSeccion" value="{{ old('GradoSeccion') }}" required autocomplete="GradoSeccion" autofocus>

                                @error('GradoSeccion')
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
