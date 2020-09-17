@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' DESCARGA ') }}</div>
                <div class="row">
                    <div class="col-lg-4">
                      <svg class="bd-placeholder-img rounded-circle" width="140" height="140"  src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"></svg>
                      <h4>ALTAS -BAJAS </h4>
                      <p> Descargar palanilla de alta-baja</p>
                      <p><a class="btn btn-secondary" href=" {{action('DescargaController@descarga')}}" role="button"> Descargar  &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></svg>
                        <h4>NOVEDAD</h4>
                      <p>Descargar palanilla de novedad</p>
                      <p><a class="btn btn-secondary" href="{{ action('DescargaController@downloadDos') }}" role="button">Descargar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></svg>
                        <h4>OTRAS NOVEDAD</h4>
                      <p>Descargar palanilla de otras novedad.</p>
                      <p><a class="btn btn-secondary" href="{{ action('DescargaController@downloadTres') }}" role="button">Descargar &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                  </div><!-- /.row -->

            
            </div> 
          </div> 
        </div> 
    </div>
    
@endsection  
