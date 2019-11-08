<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FeedbackUpdateRequest extends FormRequest
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
            'descricao' => 'string',
            'user_id' => 'exists:users,id',
            'noticia_id' => 'exists:noticias,id'
        ];
    }

    public function messages()
    {
        return [
            'descricao.string' => 'O texto do feedback tem de ser uma string.',
            'user_id.exists' => 'O utilizador que escolheu não existe.',
            'noticia_id.exists' => 'A notícia que escolheu não existe.'
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
