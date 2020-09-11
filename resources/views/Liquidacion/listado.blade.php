@extends('layouts.app')

@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">-->
        <div class="col-md-20">
        
        @if(session('mensaje'))

<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
</div>
@endif


            <div class="card">
                
            
                <div class="card-header">{{ __('Listado de planillas') }}
                
                </div>

                <div class="card-body">
                

                    <table class="table table-hover">

                        <thead>

                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Planilla</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($listado as $item)
                            <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->URLForm}}</td>
                            
                        @endforeach 
                            </tr>  
                        </tbody>
                    </table>

                    
                
                

                 
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
