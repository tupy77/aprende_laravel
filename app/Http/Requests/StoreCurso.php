<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Se cambia a true para que se pueda usar el request. // Esto se cambiaria cuando se implemente el sistema de autenticacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ];
    }

    //MODIFICAR LOS NOMBRES DE LOS CAMPOS QUE SE MUESTRAN EN LOS MENSAJES DE ERROR
    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
            'description' => 'descripcion del curso',
            'category' => 'categoria del curso'
        ];
    }

    //MODIFICAR LOS MENSAJES DE ERROR
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // Si quiero poner un mensaje para un campo en concreto
            //'name.required' => 'El campo :attribute es obligatorio'
            //'name.max' => 'La longitud del campo :attribute debe ser de 10 caracteres'
            
            // Si quiero poner un mensaje global para todos los campos
            'required' => 'El campo :attribute es obligatorio'
        ];
    }
}
