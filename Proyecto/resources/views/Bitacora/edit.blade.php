@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Bitacora.index') }}"> volver</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hay un error con los datos ingresados o no estan completos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <form method="post" action="{{action('BitacoraController@update', $bitacora->id)}}">
    	@csrf
        @method('POST')

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                     <input name="titulo" value ="{{ $bitacora->titulo }}"></input>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Materia:</strong>
                     <input name="materia" value="{{ $bitacora->materia}}"></input>

                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autores:</strong>
                    <input name="autor" value="{{ $bitacora->autor}}"></input>


                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <strong>Informacion Valiosa:</strong>


                    <textarea class="form-control"  name="info" placeholder="Informacion">
                    {{ $bitacora->info}}</textarea>

                    <button type="submit" class="btn btn-primary ">Enviar </button>

                </div>


            <div class="pull-right">
                        <a class="btn btn-success"   href="{{ route('informacion.index', ['idI'=>$bitacora->_id]) }}"> Ver toda su informacion</a>
            </div>
            <form class="form-group" action="{{ route('informacion.store') }}" method="POST">
                <label for="informacion">Agregar informacion</label>
                @csrf

                <input name="id" type="hidden" value="{{$bitacora->_id}}">
                <input name="titulo" type="hidden" value="{{$bitacora->titulo}}">
                <input name="fecha" type="hidden"  value="<?php  date_default_timezone_set('America/Santiago'); echo(date('Y-m-d H:i:s'))?>">
                <textarea type="informacion" rows="5" name="Informacion" id="Informacion" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary ">Enviar informacion</button>
            </form>
        </div>
            </div>
    </form>


    


@endsection
