<?php

namespace App\Http\Controllers\Api;

use App\Tipo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\TipoApiStoreRequest;
use App\Http\Requests\Api\TipoApiUpdateRequest;

/**
 * @group Tipo
 * 
 * Métodos para gerir tipos de notícia.
 */

class TipoApiController extends Controller
{
    /**
     * Mostrar todos os tipos inseridos na base de dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();

        $response = [
            'data' => $tipos,
            'message' => 'Listagem de tipos de notícia.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Mostrar formulário para criar novo tipo de notícia.
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
     * @bodyParam  nome_tipo string required Nome para o tipo a inserir.
     * @bodyParam  descricao_tipo int required Descrição do tipo de notícia.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoApiStoreRequest $request)
    {
        $data = $request->all();

        $tipo = Tipo::create($data);

        $response = [
            'data' => $tipo,
            'message' => 'O seu tipo de notícia foi inserido.',
            'result' => 'OK'
        ];

        return $response;
    }

    /**
     * Mostrar tipo de notícia do ID recebido.
     * 
     * @bodyParam id int required ID do tipo de notícia a mostrar.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        return $tipo
            ->where('id', $tipo->id)->get();
    }

    /**
     * Mostrar formulário para editar tipo de notícia específico.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        //
    }

    /**
     * Editar tipo de notícia específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoApiUpdateRequest $request, Tipo $tipo)
    {
        $data = $request->all();

        $tipo->update($data);

        $response = [
            'data' => '',
            'message' => 'Tipo de notícia editado.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Apagar tipo de notícia específico.
     * 
     * @bodyParam id int required Enviar ID do tipo a eliminar.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        $response = [
            'data' => '',
            'message' => 'Tipo apagado.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }
}
