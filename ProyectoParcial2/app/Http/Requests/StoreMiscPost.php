<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMiscPost extends FormRequest
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
            "name"=> "required|min:5|Max:300",
            "manufacturer"=> "required|min:5",
            "description"=> "required|min:5",
            "price"=> "required|min:0",
            "units"=> "required|min:0"
        ];
    }
}
