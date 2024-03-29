@extends('Bitacora.layout')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Bitacora.index') }}"> Volver</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>titulo:</strong>
                {{ $bitacora->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Materia:</strong>
                {{ $bitacora->materia}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info:</strong>
                {{ $bitacora->info}}
            </div>
        </div>
    </div>

    <div class="">
        <form action="{{action('BitacoraController@evaluar', $bitacora->id)}}" >
          @csrf
          @method('POST')
           Me gusta: {{$bitacora->puntaje}}</br>
           <button type="submit" class="btn btn-primary " name="evalua" value="inc">+1</button>
           <button type="submit" class="btn btn-primary " name="evalua" value="dec">-1</button>
        </form>
    </div>

    <div class="col-md-10 clear"><hr><h3>Comentario</h3>
        </div>
        <div class="col-md-10">
            <div style="background-color:rgba(153, 243, 243,0.5); margin-top: 2%">
            </div>
    		<form class="form-group" action="{{ route('Comentario.store') }}" method="POST">
                <label for="coment">Agregar comentario</label>
    			@csrf

    			<input name="idBitacora" type="hidden" value="{{$bitacora->_id}}">
    			<input name="titulo" type="hidden" value="{{$bitacora->titulo}}">
    			<input name="fecha" type="hidden"  value="<?php  date_default_timezone_set('America/Santiago'); echo(date('Y-m-d H:i:s'))?>">                
                <textarea type="text" rows="5" name="coment" id="coment" class="form-control"></textarea>
                <button type="submit" class="btn btn-primary ">Enviar Comentario</button>
            </form>
    	</div>

      <div class="col-md-10" style="margin-top: 2%">
          <a class="btn btn-success"   href="{{ route('Comentario.index', ['idB'=>$bitacora->_id]) }}"> Mas Comentarios</a>
      </div>
@endsection
