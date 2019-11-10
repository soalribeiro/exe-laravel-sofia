<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoStoreRequest;
use App\Http\Requests\TipoUpdateRequest;
use App\Tipo;
use Illuminate\Http\Request;

/**
 * @group Tipos de notícias
 * 
 * Métodos para gerir tipos de notícias.
 */

class TipoController extends Controller
{
    /**
     * Mostrar todos os tipos de notícias.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::all();

        return view('tipos')
            ->with('tipos', $tipos);
    }

    /**
     * Mostrar formulário para inserir tipo de notícia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = $request->user()->role->name;

        if ($user === "reporter") {
            abort(401);
        } else {
            return view('inserir-tipo-form');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoStoreRequest $request)
    {
        $data = $request->all();

        $tipos = Tipo::create($data);

        return redirect()->route('lista-tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        return $tipo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        return view('editar-tipo-form')
            ->with('tipo', $tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(TipoUpdateRequest $request, Tipo $tipo)
    {
        $data = $request->all();

        $tipo->update($data);

        return redirect()->route('lista-tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        return redirect()->route('lista-tipos');
    }
}
