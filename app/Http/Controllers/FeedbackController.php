<?php

namespace App\Http\Controllers;

use App\User;
use App\Noticia;
use App\Feedback;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackNotStoreRequest;
use App\Http\Requests\FeedbackStoreRequest;
use App\Http\Requests\FeedbackUpdateRequest;

/**
 * @group Feedback
 * 
 * Métodos para gerir feedbacks.
 */


class FeedbackController extends Controller
{
    /**
     * 
     * Mostrar os feedbacks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')
            ->with('noticia')->get()
            ->reverse();

        $response = [
            'data' => $feedbacks,
            'message' => 'Listagem de feedbacks',
            'result' => 'OK'
        ];

        return view('feedbacks')
            ->with('feedbacks', $feedbacks);
    }

    /**
     * Mostrar formulário para editar feedback selecionado.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $noticias = Noticia::all();

        return view('inserir-feedback-form')
            ->with('noticias', $noticias)
            ->with('users', $users);
    }

    /**
     * Inserir um novo feedback.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackStoreRequest $request)
    {
        $data = $request->all();

        $feedbacks = Feedback::create($data);

        $response = [
            'data' => $feedbacks,
            'message' => 'Secção criada.',
            'result' => 'OK'
        ];

        return redirect()->route('lista-feedbacks');
    }

    /**
     * Mostrar um determinado feedback.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return $feedback;
    }

    /**
     * Mostrar formulário para editar feedback.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        $users = User::all();
        $noticias = Noticia::all();

        return view('editar-feedback-form')
            ->with('feedback', $feedback)
            ->with('noticias', $noticias)
            ->with('users', $users);
    }

    /**
     * Editar um feedback específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackUpdateRequest $request, Feedback $feedback)
    {
        $data = $request->all();

        $feedback->update($data);

        return redirect()->route('lista-feedbacks');
    }

    /**
     * Remover um feedback.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('lista-feedbacks');
    }

    /**
     * Mostrar formulário para enviar feedback da notícia clicada.
     *
     * @param  \App\Feedback  $feedback
     * @param  \App\Noticia  $noticium
     */
    public function listfbnot(Noticia $noticium)
    {
        $users = User::all();

        return view('lista-fb-noticia')
            ->with('noticia', $noticium)
            ->with('users', $users);
    }

    /**
     * Enviar feedback da notícia clicada.
     *
     * @param  \App\Feedback  $feedback
     * @param  \App\Noticia  $noticium
     */
    public function inserirfbnot(FeedbackNotStoreRequest $request)
    {

        $data = $request->all();

        $feedback = Feedback::create($data);

        $response = [
            'data' => $feedback,
            'message' => 'Feedback enviado.',
            'result' => 'OK'
        ];

        return redirect()->route('lista-noticias');
    }
}
