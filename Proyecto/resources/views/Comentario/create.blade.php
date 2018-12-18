@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nuevo Comentario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Comentario.index') }}"> Volver </a>
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


    <form action="{{ route('Comentario.store') }}" method="POST">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>idBitacora:</strong>
		            <input type="text" name="idBitacora" class="form-control" placeholder="idBitacora">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>texto:</strong>
		            <textarea class="form-control" name="comment" placeholder="comment"></textarea>
		        </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Enviar</button>
		    </div>
		</div>
    </form>

@endsection