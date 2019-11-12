<?php

namespace App\Http\Controllers\Api;

use App\Jornal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\JornalApiStoreRequest;
use App\Http\Requests\Api\JornalApiUpdateRequest;

/**
 * @group Jornais
 * 
 * Métodos para gerir jornais.
 */

class JornalApiController extends Controller
{
    /**
     * Mostrar todos os jornais com utilizador associado.
     * Este é o método para mostrar todos os jornais inseridos na base de dados e o utilizador que o criou.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornals = Jornal::with('user')->get();

        $response = [
            'data' => $jornals,
            'message' => 'Listagem de jornais',
            'result' => 'OK'
        ];

        return response($response);
    }

    /**
     * Mostrar formulário para inserir novo jornal.
     * Geralmente, este método seria para mostrar o formulário para inserir o jornal.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Inserir um novo jornal.
     * Para inserir um novo jornal na base de dados deve enviar-se os campos apresentados abaixo.
     *
     * @bodyParam titulo-jor string required Nome para jornal.
     * @bodyParam descricao-jor string required Descrição para jornal, deve ter no máx 400 caracteres.
     * @bodyParam image image required Capa para o jornal (ex.: logótipo).
     * @bodyParam user_id int required ID do utilizador que cria o jornal, geralmente o utilizador que está logado.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JornalApiStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $jornals = Jornal::create($data);

        $response = [
            'data' => $jornals,
            'message' => 'O jornal foi inserido',
            'result' => 'OK'
        ];

        return $response;
    }

    /**
     * Mostrar o jornal do ID recebido com as informações do utilizador que o criou.
     * Deve enviar-se no pedido o ID do jornal que se pretende visualizar.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function show(Jornal $jornal)
    {
        return $jornal
            ->with('user')
            ->where('id', $jornal->id)->get();
    }

    /**
     * Mostrar formulário para editar o jornal do ID recebido.
     * Geralmente, este método seria para mostrar o formulário para editar o jornal do ID recebido no parâmetro de entrada.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornal $jornal)
    {
        //
    }

    /**
     * Editar o jornal do ID recebido no parâmetro de entrada.
     * Deve enviar-se no pedido o ID do jornal que se pretende editar.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update(JornalApiUpdateRequest $request, Jornal $jornal)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
        }

        $jornal->update($data);

        $response = [
            'data' => '',
            'message' => 'Jornal ' . $jornal->{'titulo-jor'} . ' editado',
            'result' => 'OK'
        ];

        return response($response, 201);
    }

    /**
     * Remover o jornal do ID recebido.
     * Deve ser enviado no pedido o ID do jornal a eliminar.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornal $jornal)
    {
        $jornal->delete();

        $response = [
            'data' => '',
            'message' => 'Jornal apagado.',
            'result' => 'OK'
        ];

        return response($response, 201);
    }
}
