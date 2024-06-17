@extends('layout')

@section('titulo', 'Personas')


@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
                <tr>
                    <td><a href="{{ route('servicios.create') }}">Nuevo Personal</a></td>
                </tr>
                <tr>
                    <th>Lista de Personal</th>
                </tr>
                @if($servicios)
                    <!-- <thead> -->
                        <tr>
                            <th scope="col">Apellido</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">F. Nacimiento</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sueldo</th>
                            <th scope="col">Estado</th>
                        </tr>
                    <!-- </thead> -->

                    @foreach ($servicios as $item)
                        <tr>
                            <td>{{ $item->cPerApellido }}</td>
                            <td>{{ $item->cPerNombre }}</td>
                            <td>{{ $item->cPerDireccion }}</td>
                            <td>{{ $item->dPerFecNac }}</td>
                            <td>{{ $item->nPerEdad }}</td>
                            <td>{{ $item->nPerSueldo }}</td>
                            <td>{{ $item->nPerEstado }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">nada</td>
                    </tr>
                    
                @endif
        </table>
    </div>
    
@endsection
