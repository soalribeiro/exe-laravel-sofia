<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class NoticiaApiStoreRequest extends FormRequest
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
            'image' => 'required|image',
            'user_id' => 'required|exists:users,id',
            'jornal_id' => 'required|exists:jornals,id',
            'seccao_id' => 'required|exists:seccaos,id'
        ];
    }

    public function messages()
    {
        return [
            'titulo-not.required' => 'É necessário escrever um título.',
            'titulo-not.string' => 'O título tem de ser uma string.',
            'titulo-not.max:255' => 'O título só pode ter no máximo 255 caracteres.',
            'corpo-not.required' => 'É necessário escrever corpo da notícia.',
            'corpo-not.string' => 'O corpo da notícias tem de ser uma string.',
            'corpo-not.max:400' => 'O corpo da notícias só pode ter no máximo 400 caracteres.',
            'image.required' => 'É necessário escolher uma imagem.',
            'image.image' => 'Insira uma formato válido: jpg, jpeg, png, ...',
            'user_id.required' => 'É necessário selecionar um utilizador.',
            'user_id.exists' => 'O utilizador que escolheu não existe.',
            'jornal_id.required' => 'É necessário selecionar um jornal.',
            'jornal_id.exists' => 'O jornal que escolheu não existe.',
            'seccao_id.required' => 'É necessário selecionar uma secção.',
            'seccao_id.exists' => 'O utilizador que escolheu não existe.'
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
