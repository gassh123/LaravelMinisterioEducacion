@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>
                            <div class="col-md-6">
                                @if($usuario->rol=="Directivo")
                                <?php use App\Institution; $instituciones=Institution::all();?>
                                <select class="form-control" id="institution" name="institution">
                                    @foreach($instituciones as $escuela)
                                        <option value="{{$escuela->id}}">{{$escuela->nombre}} (CUE: {{$escuela->cue}})</option>
                                    @endforeach
                                </select>
                                @else
                                <input id="area-confirm" type="text" class="form-control" name="area" autocomplete="area">    
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

