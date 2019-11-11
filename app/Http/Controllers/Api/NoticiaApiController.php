<?php

namespace App\Http\Controllers\Api;

use App\Noticia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\NoticiaApiStoreRequest;
use App\Http\Requests\Api\NoticiaApiUpdateRequest;

/**
 * @group Notícia
 * 
 * Métodos para gerir notícias.
 */

class NoticiaApiController extends Controller
{
    /**
     * Mostrar todas as notícias.
     * Este é o método para mostrar todas as notícias inseridos na base de dados e o utilizador que o criou.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::with('user')->get();

        $response = [
            'data' => $noticias,
            'message' => 'Listagem de notícias',
            'result' => 'OK'
        ];

        return response($response);
    }

    /**
     * Mostrar formulário para criar nova notícia.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Criar nova notícia.
     *
     * @bodyParam  titulo-not string required Nome para o jornal a inserir.
     * @bodyParam  corpo-not string required Corpo da notícia.
     * @bodyParam  image image required Imagem para a notícia.
     * @bodyParam  jornal_id int required ID de um dos jornais inseridos.
     * @bodyParam  seccao_id int required ID de uma das secções inseridas.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaApiStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $noticias = Noticia::create($data);

        $response = [
            'data' => $noticias,
            'message' => 'A notícia foi inserida.',
            'result' => 'OK'
        ];

        return $response;
    }

    /**
     * Mostrar notícia do ID recebido.
     * 
     * @bodyParam id int required ID da notícia a editar.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return $noticia
            ->with('user')
            ->where('id', $noticia->id)->get();
    }

    /**
     * Mostrar formulário para editar notícia específica.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Editar notícia específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaApiUpdateRequest $request, Noticia $noticia)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
        }

        $noticia->update($data);

        $response = [
            'data' => '',
            'message' => 'Notícia editada.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Apagar notícia específica.
     * 
     * @bodyParam id int required Enviar ID da notícia a eliminar.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        $response = [
            'data' => '',
            'message' => 'Notícia apagada.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }
}
