<?php

namespace App\Http\Controllers;

use App\Seccao;
use Illuminate\Http\Request;
use App\Http\Requests\SeccaoStoreRequest;
use App\Http\Requests\SeccaoUpdateRequest;

/**
 * @group Secções
 * 
 * Métodos para gerir secções.
 *
 */

class SeccaoController extends Controller
{
    /**
     * Mostrar todas as secções com utilizador, jornal e secção associados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seccaos = Seccao::all();

        $response = [
            'data' => $seccaos,
            'message' => 'Listagem de notícias',
            'result' => 'OK'
        ];

        return view('seccaos')
            ->with('seccaos', $seccaos);
    }

    /**
     * Mostrar formulário para inserir nova secção.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user()->role->name;

        if ($user === "reporter") {
            abort(401);
        } else {
            return view('inserir-seccao-form');
        }
    }

    /**
     * Inserir um nova secção.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function store(SeccaoStoreRequest $request)
    {
        $data = $request->all();

        $seccaos = Seccao::create($data);

        $response = [
            'data' => $seccaos,
            'message' => 'Secção criada.',
            'result' => 'OK'
        ];

        return redirect()->route('lista-seccaos');
    }

    /**
     * Mostrar uma determinada secção.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function show(Seccao $seccao)
    {
        return $seccao;
    }

    /**
     * Mostrar formulário para editar secção.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccao $seccao, Request $request)
    {
        $user = $request->user()->role->name;

        if ($user === "reporter") {
            abort(401);
        } else {
            return view('editar-seccao-form')
                ->with('seccao', $seccao);
        }
    }

    /**
     * Editar uma secção específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update(SeccaoUpdateRequest $request, Seccao $seccao)
    {
        $data = $request->all();

        $seccao->update($data);

        $response = [
            'data' => $seccao,
            'message' => 'Secção editada',
            'result' => 'OK'
        ];

        //return response($response, 200);
        return redirect()->route('lista-seccaos');
    }

    /**
     * Remover uma secção.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seccao $seccao)
    {
        $seccao->delete();

        return redirect()->route('lista-seccaos');
    }
}
