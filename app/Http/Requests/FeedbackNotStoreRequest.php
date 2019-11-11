<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackNotStoreRequest extends FormRequest
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
            'descricao' => 'required|string',
            'noticia_id' => 'required|exists:noticias,id',
            'user_id' => 'required|exists:users,id'
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'É necessário escrever uma descrição.',
            'descricao.string' => 'A descrição tem de ser uma string.',
            'noticia_id.required' => 'É necessário selecionar uma notícia',
            'user_id.required' => 'É necessário selecionar um utilizador.',
            'user_id.exists' => 'O utilizador que escolheu não existe.'
        ];
    }
}
