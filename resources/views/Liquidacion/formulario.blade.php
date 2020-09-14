@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PLANILLA DE NOVEDADES-INFORMACION DE LA INSTITUCION') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="cod_escuela" class="col-md-4 col-form-label text-md-right">{{ __('cod_escuela') }}</label>

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
                            <label for="INSTITUCION / NOMBRE:" class="col-md-4 col-form-label text-md-right">{{ __('INSTITUCION / NOMBRE:') }}</label>

                            <div class="col-md-6">
                                <input id="INSTITUCION / NOMBRE:" type="text" class="form-control @error('INSTITUCION / NOMBRE:') is-invalid @enderror" name="INSTITUCION / NOMBRE:" value="{{ old('INSTITUCION / NOMBRE:') }}" required autocomplete="INSTITUCION / NOMBRE:" autofocus>

                                @error('INSTITUCION / NOMBRE:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Ctg.:" class="col-md-4 col-form-label text-md-right">{{ __('Ctg.:') }}</label>

                            <div class="col-md-6">
                                <input id="Ctg.:" type="text" class="form-control @error('Ctg.:') is-invalid @enderror" name="Ctg.:" value="{{ old('Ctg.:') }}" required autocomplete="Ctg.:" autofocus>

                                @error('Ctg.:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Turno:" class="col-md-4 col-form-label text-md-right">{{ __('Turno:') }}</label>

                            <div class="col-md-6">
                                <input id="Turno:" type="text" class="form-control @error('Turno:') is-invalid @enderror" name="Turno:" value="{{ old('Turno:') }}" required autocomplete="Turno:" autofocus>

                                @error('Turno:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DOMICILIO:" class="col-md-4 col-form-label text-md-right">{{ __('DOMICILIO:') }}</label>

                            <div class="col-md-6">
                                <input id="DOMICILIO:" type="text" class="form-control @error('DOMICILIO:') is-invalid @enderror" name="DOMICILIO:" value="{{ old('DOMICILIO:') }}" required autocomplete="DOMICILIO:" autofocus>

                                @error('DOMICILIO:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="TELÉFONO:" class="col-md-4 col-form-label text-md-right">{{ __('TELÉFONO:') }}</label>

                            <div class="col-md-6">
                                <input id="TELÉFONO:" type="text" class="form-control @error('TELÉFONO:') is-invalid @enderror" name="TELÉFONO:" value="{{ old('TELÉFONO:') }}" required autocomplete="TELÉFONO:" autofocus>

                                @error('TELÉFONO:')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="FECHA:" class="col-md-4 col-form-label text-md-right">{{ __('FECHA:') }}</label>

                            <div class="col-md-6">
                                <input id="FECHA:" type="date" class="form-control @error('FECHA:') is-invalid @enderror" name="FECHA:" value="{{ old('FECHA:') }}" required autocomplete="FECHA:" autofocus>

                                @error('FECHA:')
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
