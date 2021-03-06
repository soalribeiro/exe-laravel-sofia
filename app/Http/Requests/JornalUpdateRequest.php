<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class JornalUpdateRequest extends FormRequest
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
            'titulo-jor' => 'required|unique:jornals|string|max:255',
            'descricao-jor' => 'required|string|max:400',
            'image' => 'image',
            'user_id' => 'exists:users,id'
        ];
    }

    public function messages()
    {
        return [
            'titulo-jor.required' => 'É necessário escrever um título.',
            'titulo-jor.string' => 'O título tem de ser uma string.',
            'titulo-jor.max:255' => 'O título só pode ter no máximo 255 caracteres.',
            'titulo-jor.unique' => 'Esse jornal já existe, escolha outro nome.',          
            'descricao-jor.required' => 'É necessário escrever uma descrição',
            'descricao-jor.string' => 'A descrição tem de ser uma string.',
            'descricao-jor.max:400' => 'A descrição só pode ter no máximo 400 caracteres.',
            'image.image' => 'Insira uma formato válido: jpg, jpeg, png, ...',
            'user_id.exists' => 'O utilizador que escolheu não existe.'
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
