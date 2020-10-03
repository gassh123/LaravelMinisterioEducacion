@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
         
            <div class="card">
            
                <div class="card-header">{{ __('Add novelty') }}
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('novelty.store')}}">
                        @csrf
                        @if(session('mensaje'))

                          <div class="alert alert-success" role="alert" class="d-inline">{{ session('mensaje') }} 
                          
                          <form action="" class="text-right" class="d-inline">
                          <a href="{{ url('index/modify') }}">Atrás</a>
                          
                          </form></div>
                          
                          
                        @endif
                        @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          El nombre es requerido
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @enderror
                        @error('URLimagen')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          La imagen es requerida
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        @enderror

                         
                        

               
                        
                      <div class="form-group">
                        <label for="formGroupExampleInput">Image name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Image information</label>
                        <textarea class="form-control" id="InformationImage" name="InformationImage" rows="3" value="{{old('InformationImage')}}"></textarea>
                      </div>
                      
                      <div class="form-group">
                        
                        <input accept="image/*" type="file" class="form-control-file" id="URLimagen" name="URLimagen" value="{{old('URLimagen')}}">
                      </div>

                      <button class="btn btn-primary" type="submit">Add</button>
                     
                     
                      
                      
                      
                    </form>

                    
                      
                       

                    
                
                

                 
               

                <div class="links">
                    
                    
                </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


