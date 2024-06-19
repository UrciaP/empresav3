<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cperApellido'=> 'required',
            'cPerNombre'=> 'required',
            'cPerDireccion'=> 'required',
            'dPerFecNac'=> 'required',
            'nPerEdad'=> 'required',
            'nPerSueldo'=> 'required',
            'nPerEstado' => 'required|in:0,1'
        ];
    }

    public function messages(): array
    {
        return [
            'cperApellido.required'=> 'campo Apellido obligatorio',
            'cPerNombre.required'=> 'campo Nombre obligatorio',
            'cPerDireccion.required'=> 'campo Direccion obligatorio',
            'dPerFecNac.required'=> 'campo FecNac obligatorio',
            'nPerEdad.required'=> 'campo Edad obligatorio',
            'nPerSueldo.required'=> 'campo Sueldo obligatorio',
            'nPerEstado.required' => 'campo Estado obligatorio'
        ];
    }
}
