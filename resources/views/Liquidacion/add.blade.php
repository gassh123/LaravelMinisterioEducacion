@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
         
            <div class="card">
            
                <div class="card-header">{{ __('Subir planilla') }}
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('liquidacion.store')}}">
                        @csrf
                        @if(session('mensaje'))

                          <div class="alert alert-success" role="alert">{{ session('mensaje') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <form action="" class="text-right" class="d-inline">
                          <a href="{{ url('index/modify') }}">Atrás</a>
                          
                          </form>
                          </div>
                        @endif

                        @if(session()->has('mensaje1'))
                          <div class="alert alert-danger" role="alert">{{ session('mensaje1') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <form action="" class="text-right" class="d-inline">
                          <a href="{{ url('index/modify') }}">Atrás</a>
                          
                          </form>
                          </div>
                        @endif
                        @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          El nombre es requerido
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @enderror
                        @error('URLForm')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          La planilla es requerida
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @enderror

                         
                        

               
                        
                      <div class="form-group">
                        <label for="formGroupExampleInput">Nombre de la planilla</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                      </div>
                      
                      <div class="form-group">
                            <label for="formGroupExampleInput">{{ __('Tipo de planilla') }}</label>
                                
                            <select id="tipo" value="{{old('tipo')}}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false" class="form-control @error('tipo') is-invalid @enderror" name="tipo"  required autocomplete="tipo">
                               
                            <option value="">Escoja una planilla</option>
                           
                            <div class="dropdown-menu dropdown-menu-lg-right">
                                <option class="dropdown-item" type="button" >Alta y bajas</option>
                                <option class="dropdown-item" type="button" >Novedades</option>
                                <option class="dropdown-item" type="button" >Otras</option>
                                
                            </div>
                            
                            
                            </select>
                      </div>
                      <br>
                      
                      <div class="form-group">
                        
                        <input accept=".pdf" type="file" class="form-control-file" id="URLForm" name="URLForm" value="{{old('URLForm')}}">
                      </div>

                      

                      <button class="btn btn-primary" type="submit">Add</button>
                     
                     
                      
                      
                      
                    </form>

                    
                      
                       

                    
                
                

                 
                <div class="title m-b-md">
                    
                </div>

                <div class="links">
                    
                    
                </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
