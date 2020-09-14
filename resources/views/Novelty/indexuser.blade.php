@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>


  

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
                    <div class=“button-container”>

                    
                     
                  

<br>
                        ​<picture >
                        
                        
                        <img  src="almacenamiento/img/{{$item->URLimagen}}" alt="{{$item->name}}" width="450" >
                        <figcaption class="figure-caption">{{$item->InformationImage}}</figcaption>
                        </picture>
                    
                        
                     <br><br><br><br>
                    
                    </div>
                
                

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
<script type="text/javascript" src="{{ asset ('js/MostrarOcultar.js') }}">
</script>
</body>
</html>