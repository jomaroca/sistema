@extends('layouts.app')
@section('content')
<div class="container">

<div class="text-success">
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif
</div><br>

<a href="{{ url('empleado/create') }}" class="btn btn-success">Crear nuevo empleado</a><br>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Correo</th>
            <th>Gestión</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td><img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" width="100" alt="Foto"></td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido1 }}</td>
            <td>{{ $empleado->Apellido2 }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
               
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a>

            <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar?')" value="Eliminar">
            </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $empleados->links() !!}

</div>
@endsection