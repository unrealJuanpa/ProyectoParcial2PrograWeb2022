<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicamentoPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nombre"=> "required|min:5|Max:500",
            "descripcion"=> "required|min:5",
            "cantidad"=> "required|min:1",
            "fecha_expiracion"=> "required",
            "precio_unidad"=> "required|min:1"
        ];
    }
}
