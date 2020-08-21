@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">{{ __('Dashboard') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="content">

                   
                    <div class="title m-b-md" class="text-center">
                        Bienvenido
                    </div>

                    <div class="links">
                        <a href="{{ url('/index') }}">Novedades</a>
                        
                    </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
                      

                   
