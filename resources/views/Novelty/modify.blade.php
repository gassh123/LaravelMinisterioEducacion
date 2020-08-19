@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!--BOTON AGREGAR-->
        <a href="{{ url('modify/add') }}"  class="btn btn-success">Add</a><br><br>
         
            <div class="card">
            
                <div class="card-header">{{ __('Listado de novedades') }}
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">

                        <thead>

                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imágen</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($imagen as $item)
                            <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->URLimagen}}</td>
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