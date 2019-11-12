<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TipoApiUpdateRequest extends FormRequest
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
        return [
            'nome_tipo' => 'string|max:255',
            'descricao_tipo' => 'string|max:400'
        ];
    }
    public function messages()
    {
        return [
            'nome_tipo.string' => 'O nome tem de ser uma string.',
            'nome_tipo.max:255' => 'O nome só pode ter no máximo 255 caracteres.',
            'descricao_tipo.string' => 'A descrição tem de ser uma string.',
            'descricao_tipo.max:400' => 'A descrição só pode ter no máximo 400 caracteres.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data' => $validator->errors(),
                    'msg' => 'Erro, tente de novo.'
                ],
                422
            )
        );
    }
}
