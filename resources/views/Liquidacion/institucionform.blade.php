@extends('layouts.app')

@section('content')


<div class="container">
<a href="{{ url('/indexform') }}" class="btn btn-outline-primary">Volver</a>
<br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar institución') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('liquidacion.addinstitucion')}}">
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
                            <label for="cod_escuela" class="col-md-4 col-form-label text-md-right">{{ __('N° institución') }}</label>

                            <div class="col-md-6">
                                <input id="cod_escuela" type="number" min="0" class="form-control @error('cod_escuela') is-invalid @enderror" name="cod_escuela" value="{{ old('cod_escuela') }}" required autocomplete="cod_escuela" autofocus>

                                @error('cod_escuela')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Institucion" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de la institución') }}</label>

                            <div class="col-md-6">
                                <input id="Institucion" type="text" class="form-control @error('INSTITUCION / NOMBRE:') is-invalid @enderror" name="Institucion" value="{{ old('Institucion') }}" required autocomplete="Institucion" autofocus>

                                @error('INSTITUCION / NOMBRE:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ctg" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <input id="ctg" type="text" class="form-control @error('Ctg.:') is-invalid @enderror" name="ctg" value="{{ old('ctg') }}" required autocomplete="ctg" autofocus>

                                @error('Ctg.:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="turno" class="col-md-4 col-form-label text-md-right">{{ __('Turno') }}</label>

                            <div class="col-md-6">
                                <input id="turno" type="text" class="form-control @error('Turno:') is-invalid @enderror" name="turno" value="{{ old('turno') }}" required autocomplete="turno" autofocus>

                                @error('Turno:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="domicilio" class="col-md-4 col-form-label text-md-right">{{ __('Domicilio') }}</label>

                            <div class="col-md-6">
                                <input id="domicilio" type="text" class="form-control @error('DOMICILIO:') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>

                                @error('DOMICILIO:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control @error('TELÉFONO:') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('TELÉFONO:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="localidad" class="col-md-4 col-form-label text-md-right">{{ __('Localidad') }}</label>

                            <div class="col-md-6">
                                <input id="localidad" type="text" class="form-control @error('LOCALIDAD:') is-invalid @enderror" name="localidad" value="{{ old('localidad') }}" required autocomplete="localidad" autofocus>

                                @error('LOCALIDAD:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <input id="departamento" type="text" class="form-control @error('Departamento:') is-invalid @enderror" name="departamento" value="{{ old('departamento') }}" required autocomplete="departamento" autofocus>

                                @error('Departamento:')
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
