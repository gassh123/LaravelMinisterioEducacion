@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
         
            <div class="card">
            
                <div class="card-header">{{ __('Edit novelty') }}
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('novelty.update',$datos->id)}}">
                        @method('PUT')
                        @csrf
                        @if(session('mensaje'))

                          <div class="alert alert-success" role="alert">{{ session('mensaje') }}</div>
                        @endif

                        @if(session()->has('errormsj'))
                          <div class="alert alert-danger" role="alert">{{ session('errormsj') }}</div>
                        @endif
                        
                      <div class="form-group">
                        <label for="formGroupExampleInput">Image name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{($datos->name)}}">
                      </div>
                      <div class="form-group">
                      <label for="formGroupExampleInput">URL image</label>
                        <input type="text" class="form-control" id="URLimagen" name="URLimagen" value="{{$datos->URLimagen}}">
                        
                      </div>

                      <button class="btn btn-warning" type="submit">Edit</button>
                     
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