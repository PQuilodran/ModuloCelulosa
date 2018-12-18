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
			<th>Titulo </th>
			<th>Fecha informacion</th>
			<th>informacion</th>
        </tr>
	    @foreach ($informacion as $informacion)
	    <tr>
			<td>{{ $informacion->titulo }}</td>
			<td>{{ $informacion->fecha }}</td>
            <td>{{ $informacion->informacion}}</td>            
	    @endforeach
    </table>
@endsection