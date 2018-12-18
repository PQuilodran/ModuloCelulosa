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
			<th>Titulo post</th>
			<th>Fecha comentario</th>
			<th>Comentario</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($comentario as $comentario)
	    <tr>
			<td>{{ $comentario->titulo }}</td>
			<td>{{ $comentario->fecha }}</td>
            <td>{{ $comentario->coment}}</td>            
	    @endforeach
    </table>

    <h3 class="border-bottom border-gray pb-2 mb-0">Comentarios</h3>
     @foreach ($comentario as $comentario)
    <div class="media text-muted pt-3">
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="text-gray-dark">
                {{ $comentario->titulo }}
            </strong>
            <span class="d-block" >{{ $comentario->fecha }}</span>       
        </p>
            <small class="d-block text-right mt-4">  {{ $comentario->coment}}</small>
	     @endforeach
    </div>

@endsection