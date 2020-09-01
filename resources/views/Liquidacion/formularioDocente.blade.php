@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PLANILLA DE NOVEDADES-INFORMACION DE DOCENTES') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="D.N.I." class="col-md-4 col-form-label text-md-right">{{ __('D.N.I.') }}</label>

                            <div class="col-md-6">
                                <input id="D.N.I." type="number" min="0" class="form-control @error('D.N.I.') is-invalid @enderror" name="D.N.I." value="{{ old('D.N.I.') }}" required autocomplete="D.N.I." autofocus>

                                @error('D.N.I.')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Apellido Y Nombres:" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Y Nombres:') }}</label>

                            <div class="col-md-6">
                                <input id="Apellido Y Nombres:" type="text" class="form-control @error('Apellido Y Nombres:') is-invalid @enderror" name="Apellido Y Nombres:" value="{{ old('Apellido Y Nombres:') }}" required autocomplete="Apellido Y Nombres:" autofocus>

                                @error('Apellido Y Nombres:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Cargo:" class="col-md-4 col-form-label text-md-right">{{ __('Cargo:') }}</label>

                            <div class="col-md-6">
                                <input id="Cargo:" type="text" class="form-control @error('Cargo:') is-invalid @enderror" name="Cargo:" value="{{ old('Cargo:') }}" required autocomplete="Cargo:" autofocus>

                                @error('Cargo:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Carácter:" class="col-md-4 col-form-label text-md-right">{{ __('Carácter:') }}</label>

                            <div class="col-md-6">
                                <input id="Carácter:" type="text" class="form-control @error('Carácter:') is-invalid @enderror" name="Carácter:" value="{{ old('Carácter:') }}" required autocomplete="Carácter:" autofocus>

                                @error('Carácter:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Grado-Seccion:" class="col-md-4 col-form-label text-md-right">{{ __('Grado-Seccion:') }}</label>

                            <div class="col-md-6">
                                <input id="Grado-Seccion:" type="text" class="form-control @error('Grado-Seccion:') is-invalid @enderror" name="Grado-Seccion:" value="{{ old('Grado-Seccion:') }}" required autocomplete="Grado-Seccion:" autofocus>

                                @error('Grado-Seccion:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Tipo:     " class="col-md-4 col-form-label text-md-right">{{ __('Tipo:') }}</label>
                            <div class="col-md-6">
                                <select id="Tipo" class="form-control" type="text" @error('Tipo:') is-invalid @enderror" name="Tipo:" value="{{ old('Tipo:') }}" required autocomplete="Tipo:" autofocus >
                                <option selected>  </option>
                                <option> Licencias </option>
                                <option> Servicios en el mes</option>
                                </select>
                                @error('Tipo:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                          </div>
                        
                          <div class="form-group row">
                            <label for="Desde la fecha:" class="col-md-4 col-form-label text-md-right">{{ __('Desde la fecha:') }}</label>

                            <div class="col-md-6">
                                <input id="Desde la fecha:" type="date" class="form-control @error('Desde la fecha:') is-invalid @enderror" name="Desde la fecha:" value="{{ old('Desde la fecha:') }}" required autocomplete="Desde la fecha:" autofocus>

                                @error('Desde la fecha:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Hasta la fecha:" class="col-md-4 col-form-label text-md-right">{{ __('Hasta la fecha:') }}</label>

                            <div class="col-md-6">
                                <input id="Hasta la fecha:" type="date" class="form-control @error('Hasta la fecha:') is-invalid @enderror" name="Hasta la fecha:" value="{{ old('Hasta la fecha:') }}" required autocomplete="Hasta la fecha:" autofocus>

                                @error('Hasta la fecha:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Total:" class="col-md-4 col-form-label text-md-right">{{ __('Total:') }}</label>

                            <div class="col-md-6">
                                <input id="Total:" type="text" class="form-control @error('Total:') is-invalid @enderror" name="Total:" value="{{ old('Total:') }}" required autocomplete="Total:" autofocus>

                                @error('Total:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Tipo de caracter: " class="col-md-4 col-form-label text-md-right">{{ __('Tipo de caracter:') }}</label>
                            <div class="col-md-6">
                                <select id="Tipo de caracter" class="form-control" type="text" @error('Tipo de caracter:') is-invalid @enderror" name="Tipo de caracter:" value="{{ old('Tipo de caracter:') }}" required autocomplete="Tipo de caracter:" autofocus >
                                <option selected>  </option>
                                <option> Motivo vacante,suplencia,volantia </option>
                                <option> Articulo </option>
                                <option> Tipo de novedad -Acto administrativo</option>
                                </select>
                                @error('Tipo de caracter:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                          </div>

                        <div class="form-group row">
                            <label for="Observaciones:" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones:') }}</label>

                            <div class="col-md-6">
                                <input id="Observaciones:" type="text" class="form-control @error('Observaciones:') is-invalid @enderror" name="Observaciones:" value="{{ old('Observaciones:') }}" required autocomplete="Observaciones:" autofocus>

                                @error('Observaciones:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                     
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ENVIAR') }}
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