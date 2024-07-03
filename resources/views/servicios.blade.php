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
                @foreach ($servicios as $item)
                    <tr>
                        <td><a href="{{ route('servicios.show', ['id' => $item->nPerCodigo]) }}">{{ $item->cPerApellido }} , {{ $item->cPerNombre }}</a></td>
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
