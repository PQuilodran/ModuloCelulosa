@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nueva informacion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('informacion.index') }}"> Volver </a>
            </div>
        </div>
    </div>


   @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Hay un error con los datos ingresados o no estan completos los campos..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('informacion.store') }}" method="POST">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>informacion:</strong>
		            <textarea class="form-control" name="informacion" placeholder="informacion"></textarea>
		        </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Enviar</button>
		    </div>
		</div>
        <input name="id" type="hidden" value="{{$bitacora->idI}}">
        <div class="col-md-10" style="margin-top: 2%">
          <a class="btn btn-success"   href="{{ route('informacion.index', ['idI'=>$Bitacora->id]) }}"> Mas informcaion</a>
      </div>
    </form>

@endsection