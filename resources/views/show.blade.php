@extends('layout')

@section('titulo', 'Persona | ' .$persona->nPerCodigo)


@section('content')
    <table class="table table-striped">
        <tr>
            <th colspan="3">Empleado con Id: {{$persona->cPerCodigo}}</th>
        </tr>    
        <tr>
            <td colspan="3">{{$persona->cPerApellido}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->cPerNombre}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->cPerDireccion}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerFecNac}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerEdad}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerSexo}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerSueldo}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$persona->nPerEstado}}</td>
        </tr>
        
        <tr>
            <td colspan="3">{{$persona->created_at->diffForHumans()}}</td>
        </tr>
    </table>
    

@endsection