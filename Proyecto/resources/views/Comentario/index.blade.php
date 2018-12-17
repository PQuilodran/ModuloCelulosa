@extends('Bitacora.layout')
@section('content')
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
           <div class="pull-right">
                <a class="btn btn-primary" href="{{ URL::previous() }}"> Volver</a>
            </div>

    <table class="table table-bordered">
        <tr>
		    <td>id Comentario</td>
			<td>titulo</th>
			<th>Comentario</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($comentario as $comentario)
	    <tr>
		    <td>{{ $comentario->_id }}</td>
			<td>{{ $comentario->titulo }}</td>
            <td>{{ $comentario->coment}}</td>            
	    @endforeach
    </table>
@endsection