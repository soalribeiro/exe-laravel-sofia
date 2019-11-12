<?php

namespace App\Http\Controllers\Api;

use App\Seccao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SeccaoApiStoreRequest;
use App\Http\Requests\Api\SeccaoApiUpdateRequest;

/**
 * @group Secção
 * 
 * Métodos para gerir secções.
 */

class SeccaoApiController extends Controller
{
    /**
     * Mostrar todas as secções.
     * Este é o método para mostrar todas as secções inseridas na base de dados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccaos = Seccao::all();

        $response = [
            'data' => $seccaos,
            'message' => 'Listagem de secções.',
            'result' => 'OK'
        ];

        return response($response);
    }

    /**
     * Mostrar formulário para criar nova secção.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Criar nova secção.
     *
     * @bodyParam  titulo_sec string required Título de secção.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeccaoApiStoreRequest $request)
    {
        $data = $request->all();

        $seccaos = Seccao::create($data);

        $response = [
            'data' => $seccaos,
            'message' => 'A secção foi inserida.',
            'result' => 'OK'
        ];

        return $response;
    }

    /**
     * Mostrar secção do ID recebido.
     * 
     * @bodyParam id int required ID da secção a editar.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function show(Seccao $seccao)
    {
        return $seccao
            ->where('id', $seccao->id)->get();
    }

    /**
     * Mostrar formulário para editar secção específica.
     * Deve ser feito um return do blade a mostrar ao utilizador.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccao $seccao)
    {
        //
    }

    /**
     * Editar secção específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function update(SeccaoApiUpdateRequest $request, Seccao $seccao)
    {
        $data = $request->all();

        $seccao->update($data);

        $response = [
            'data' => '',
            'message' => 'Secção ' . $seccao->titulo_sec . ' editada.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Apagar secção específica.
     * 
     * @bodyParam id int required Enviar ID da secção a eliminar.
     *
     * @param  \App\Seccao  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccao $seccao)
    {
        $seccao->delete();

        $response = [
            'data' => '',
            'message' => 'Secção apagada.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }
}
