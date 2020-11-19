<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargosFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->request->has("cancel")){ return [];}
        return [
            'tipo_cargo' => 'required',
            'sigla_cargo' => 'required'
        ];
    }

    public function messages(){
    	return [
            'tipo_cargo.required' => 'O TIPO do Cargo deve ser preenchido',
            'sigla_cargo.required' => 'A SIGLA do Cargo deve ser preenchida'
    	];
    }
}
