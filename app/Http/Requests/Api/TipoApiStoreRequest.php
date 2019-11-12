<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TipoApiStoreRequest extends FormRequest
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
            'nome_tipo' => 'required|string|max:255',
            'descricao_tipo' => 'required|string|max:400'
        ];
    }
    public function messages()
    {
        return [
            'nome_tipo.required' => 'É necessário escrever um nome para o tipo de notícia.',
            'nome_tipo.string' => 'O nome tem de ser uma string.',
            'nome_tipo.max:255' => 'O nome só pode ter no máximo 255 caracteres.',
            'descricao_tipo.required' => 'É necessário escrever uma descrição.',
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
