@extends('layout')

@section('titulo', 'Crear-Persona')

@section('content')

    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">Agregar nuevo personal</th>
        </tr>
        <form action="{{ route('servicios.store') }}" method="POST">
            {{ csrf_field() }}
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="cperApellido"  value="{{ old('cperApellido') }}"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre') }}"></td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion') }}"></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento</td>
                <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac') }}"></td>
            </tr>

            <tr>
                <td>Edad</td>
                <td><input type="number" name="nPerEdad" value="{{ old('nPerEdad') }}"></td>
            </tr>
            <tr>
                <td>Sueldo</td>
                <td><input type="number" step="0.01" name="nPerSueldo" value="{{ old('nPerSueldo') }}"></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td>
                    <select name="nPerEstado" class="form-control">
                        <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>1</option>
                        <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>0</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button>guardar</button></td>
            </tr>
        </form>
    </table>

    @if ($errors->any())
            <div class="alert alert-danger alert-fixed-bottom">
                <strong>LLenar todos los campos:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

@endsection



