@extends('Usuario.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuarios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('Usuario.create') }}"> Create New Usuario</a>
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
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($Usuario as $usuario)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $usuario->_id }}</td>
	        <td>{{ $usuario->puntos_actividad }}</td>
	        <td>
                <form action="{{ route('Usuario.destroy',$usuario->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('Usuario.show',$usuario->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('Usuario.edit',$usuario->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection