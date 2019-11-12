<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FeedbackApiStoreRequest extends FormRequest
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
            'descricao' => 'required|string|max:400',
            'noticia_id' => 'required|exists:noticias,id',
            'user_id' => 'required|exists:users,id'
        ];
    }
    public function messages()
    {
        return [
            'descricao.required' => 'É necessário escrever uma descrição.',
            'descricao.string' => 'A descrição tem de ser uma string.',
            'descricao.max:400' => 'A descrição só pode ter no máximo 400 caracteres.',
            'user_id.required' => 'É necessário selecionar um utilizador.',
            'user_id.exists' => 'Esse utilizador não existe.',
            'noticia_id.required' => 'É necessário selecionar uma notícia.',
            'noticia_id.exists' => 'Essa notícia não existe.'
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
