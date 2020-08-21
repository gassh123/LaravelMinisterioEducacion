@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Novedades') }}
                    
                    
                        
                    
                </div>

                <div class="card-body card-bodyImagen">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($imagen as $item)
                
                <img src="almacenamiento/img/{{$item->URLimagen}}" alt="{{$item->name}}" width="450"> <br><br><br><br>

                @endforeach   
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