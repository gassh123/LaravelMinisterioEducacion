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
                
            
                <div class="card-header">{{ __('Información de novedades') }}
                
                </div>

                <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <!--<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
      </div>    
    </div>
  </div>
</div>

                
                           

                    
                
                

                 
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- BOTON MODIFICAR
//--------------------------------------------------------------------->

