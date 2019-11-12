<?php

namespace App\Http\Controllers\Api;

use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\FeedbackApiStoreRequest;
use App\Http\Requests\Api\FeedbackApiUpdateRequest;

/**
 * @group Feedback
 * 
 * Métodos para gerir feedbacks.
 */

class FeedbackApiController extends Controller
{
    /**
     * Mostrar todos os feedbacks inseridos na base de dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::with('user')->get();

        $response = [
            'data' => $feedback,
            'message' => 'Listagem de feedbacks.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Mostrar formulário para criar novo feedback.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Criar novo feedback.
     *
     * @bodyParam  descricao string required Descrição para o feedback a inserir.
     * @bodyParam  noticia_id int required ID de uma das notícias inseridas.
     * @bodyParam  user_id int required ID de um dos utilizadores inseridos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackApiStoreRequest $request)
    {
        $data = $request->all();

        $feedback = Feedback::create($data);

        $response = [
            'data' => $feedback,
            'message' => 'O seu feedback foi inserido.',
            'result' => 'OK'
        ];

        return $response;
    }

    /**
     * Mostrar feedback do ID recebido.
     * 
     * @bodyParam id int required ID do feedback a mostrar.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return $feedback
            ->with('user')
            ->with('noticia')
            ->where('id', $feedback->id)->get();
    }

    /**
     * Mostrar formulário para editar feedback específico.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Editar feedback específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackApiUpdateRequest $request, Feedback $feedback)
    {
        $data = $request->all();

        $feedback->update($data);

        $response = [
            'data' => '',
            'message' => 'Feedback editado.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Apagar feedback específico.
     * 
     * @bodyParam id int required Enviar ID do feedback a eliminar.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        $response = [
            'data' => '',
            'message' => 'Feedback apagado.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }
}
