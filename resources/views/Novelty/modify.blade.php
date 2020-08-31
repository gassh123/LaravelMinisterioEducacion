@extends('layouts.app')

@section('content')
<div class="container">
   <!-- <div class="row justify-content-center">-->
        <div class="col-md-20">
        <!--BOTON AGREGAR-->
        <a href="{{ url('modify/add') }}"  class="btn btn-success">Add</a><br><br>
        @if(session('mensaje'))

<div class="alert alert-danger" role="alert">{{ session('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
</div>
@endif


            <div class="card">
                
            
                <div class="card-header">{{ __('Listado de novedades') }}
                
                </div>

                <div class="card-body">
                

                    <table class="table table-hover">

                        <thead>

                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imágen</th>
                            <th scope="col">Información</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($imagen as $item)
                            <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->URLimagen}}</td>
                            <td>{{$item->InformationImage}}</td>
                            <td>
                            <!--BOTON MODIFICAR-->
                            <a href="{{ url('modify/edith', $item) }}" class="btn btn-warning">Edit</a>
                                                       
                            <form action="{{ url('modify/delete', $item) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <!--BOTON ELIMINAR-->
                            
                            <button class="btn btn-danger" type="submit">Del</button>
                            
                            
                            </form>
                           
                            </td>
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


<!-- BOTON MODIFICAR
>-->