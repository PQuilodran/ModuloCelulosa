@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Nueva Bitacora</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Bitacora.index') }}"> Volver </a>
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


    <form action="{{ route('Bitacora.store') }}" method="POST">
    	@csrf


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Titulo:</strong>
		            <input type="text" name="titulo" class="form-control" placeholder="Titulo">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Materia:</strong>

		            <div class="container">

                    <form>
                     <input class="form-control" name="materia" >
                     <div class="form-group">
<<<<<<< HEAD
                     <select class="form-control" name="materia">
                      @foreach($Bitacora as $bitacora)
                     <option>{{ $bitacora->materia}}</option>
                   @endforeach

=======
                     <select name="materia" class="form-control" id="sel1">
                      @foreach($Bitacora as $bitacora)
                      <option  value="{{ $bitacora->materia}}">{{ $bitacora->materia}}</option>
                      @endforeach
>>>>>>> alfa
                    </select>
                  </div>
                 </form>
                </div>
		        </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Autores:</strong>
		            <textarea class="form-control" name="autor" placeholder="Autor"></textarea>
		        </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Informacion Valiosa:</strong>
		            <textarea class="form-control" style="height:200px" name="info" placeholder="Informacion"></textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Enviar</button>
		    </div>
		</div>


    </form>

@endsection
