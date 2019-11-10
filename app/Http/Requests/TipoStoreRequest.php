<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoStoreRequest extends FormRequest
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
            'nome_tipo.required' => 'É necessário escrever o nome do tipo de notícia.',
            'nome_tipo.string' => 'O nome do tipo de notícia deve ser uma string.',
            'nome_tipo.max:255' => 'O nome deve ter no máximo 255 caracteres.',
            'descricao_tipo.required' => 'É necessário escrever uma descrição do tipo.',
            'descricao_tipo.string' => 'A descrição do tipo de notícia deve ser uma string.',
            'descricao_tipo.max:400' => 'A descrição deve ter no máximo 400 caracteres.',
        ];
    }
}
