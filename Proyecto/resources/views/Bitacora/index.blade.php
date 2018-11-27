@extends('Bitacora.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Bitacoras</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Bitacora.create') }}"> Crear Nueva Bitacora</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Materia</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($Bitacora as $bitacora)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $bitacora->_id }}</td>
	        <td>{{ $bitacora->puntos_actividad }}</td>
	        <td>
                <form action="{{ route('Bitacora.destroy',$bitacora->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('Bitacora.show',$bitacora->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('Bitacora.edit',$bitacora->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection