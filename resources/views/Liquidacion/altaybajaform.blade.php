@extends('layouts.app')

@section('content')


<div class="container">
<a href="{{ url('/indexform') }}" class="btn btn-outline-primary">Volver</a>
<br><br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cargar altas y bajas') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('liquidacion.addaltaybaja')}}">
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
                            <label for="docente_id" class="col-md-4 col-form-label text-md-right">{{ __('docente_id') }}</label>

                            <div class="col-md-6">
                                <input id="docente_id" type="number" min="0" class="form-control @error('docente_id') is-invalid @enderror" name="docente_id" value="{{ old('docente_id') }}" required autocomplete="docente_id" autofocus>

                                @error('desdeAB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="institucion_id" class="col-md-4 col-form-label text-md-right">{{ __('institucion_id') }}</label>

                            <div class="col-md-6">
                                <input id="institucion_id" type="number" min="0" class="form-control @error('institucion_id') is-invalid @enderror" name="institucion_id" value="{{ old('institucion_id') }}" required autocomplete="institucion_id" autofocus>

                                @error('institucion_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--
                        <div class="form-group row">
                            <label for="docente_id" class="col-md-4 col-form-label text-md-right">{{ __('Docente') }}</label>
                                <div class="btn-group col-md-6 ">
                            <select id="docente_id" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="form-control @error('docente_id') is-invalid @enderror" name="docente_id"  required autocomplete="docente_id">
                               
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
                        
                        <div class="form-group row">
                            <label for="Institucion" class="col-md-4 col-form-label text-md-right">{{ __('Institución') }}</label>
                                <div class="btn-group col-md-6 ">
                            <select id="Institucion" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="form-control @error('Institucion') is-invalid @enderror" name="Institucion"  required autocomplete="Institucion">
                               
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
                            <label for="tipoAB" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <input id="tipoAB" type="text" min="0" class="form-control @error('tipoAB') is-invalid @enderror" name="tipoAB" value="{{ old('tipoAB') }}" required autocomplete="tipoAB" autofocus>

                                @error('tipoAB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <label for="desdeAB" class="col-md-4 col-form-label text-md-right">{{ __('Desde') }}</label>

                            <div class="col-md-6">
                                <input id="desdeAB" type="date" min="0" class="form-control @error('desdeAB') is-invalid @enderror" name="desdeAB" value="{{ old('desdeAB') }}" required autocomplete="desdeAB" autofocus>

                                @error('desdeAB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="hastaAB" class="col-md-4 col-form-label text-md-right">{{ __('Hasta') }}</label>

                            <div class="col-md-6">
                                <input id="hastaAB" type="date" class="form-control @error('hastaAB') is-invalid @enderror" name="hastaAB" value="{{ old('hastaAB') }}" required autocomplete="hastaAB" autofocus>

                                @error('hastaAB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="totalAB" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>

                            <div class="col-md-6">
                                <input id="totalAB" type="number" class="form-control @error('totalAB') is-invalid @enderror" name="totalAB" value="{{ old('totalAB') }}" required autocomplete="totalAB" autofocus>

                                @error('totalAB')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="motivo" class="col-md-4 col-form-label text-md-right">{{ __('Motivo') }}</label>

                            <div class="col-md-6">
                                <input id="motivo" type="text" class="form-control @error('motivo') is-invalid @enderror" name="motivo" value="{{ old('motivo') }}" required autocomplete="motivo" autofocus>

                                @error('motivo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="observacionesAB" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones') }}</label>

                            <div class="col-md-6">
                                <input id="observacionesAB" type="text" class="form-control @error('observacionesAB') is-invalid @enderror" name="observacionesAB" value="{{ old('observacionesAB') }}" required autocomplete="observacionesAB" autofocus>

                                @error('observacionesAB')
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