<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class NoticiaUpdateRequest extends FormRequest
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
            'titulo-not' => 'required|string|max:255',
            'corpo-not' => 'required|string|max:400',
            'image' => 'image',
            'user_id' => 'exists:users,id',
            'jornal_id' => 'exists:jornals,id',
            'seccao_id' => 'exists:seccaos,id'
        ];
    }

    public function messages()
    {
        return [
            'titulo-not.required' => 'É necessário escrever um título para a notícia.',
            'titulo-not.string' => 'O título tem de ser uma string.',
            'titulo-not.max:255' => 'O título só pode ter no máximo 255 caracteres.',
            'corpo-not.required' => 'É necessário escrever corpo da notícia.',
            'corpo-not.string' => 'O corpo da notícias tem de ser uma string.',
            'corpo-not.max:400' => 'O corpo da notícias só pode ter no máximo 400 caracteres.',
            'image.image' => 'Insira uma formato válido: jpg, jpeg, png, ...',
            'user_id.exists' => 'O utilizador que escolheu não existe.',
            'jornal_id.exists' => 'O jornal que escolheu não existe.',
            'seccao_id.exists' => 'O utilizador que escolheu não existe.'
        ];
    }

    /* protected function failedValidation(Validator $validator)
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
    } */
}
