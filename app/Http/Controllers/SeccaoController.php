<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeccaoStoreRequest;
use App\Http\Requests\SeccaoUpdateRequest;
use App\Seccao;
use Illuminate\Http\Request;

class SeccaoController extends Controller
{
    /**
     * @group Sections management
     * 
     * Display all sections inserted in database.
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inserir-seccao-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * Display the specified resource.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function show(Seccao $seccao)
    {
        return $seccao;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seccao  $seccao
     * @return \Illuminate\Http\Response
     */
    public function edit(Seccao $seccao)
    {
        return view('editar-seccao-form')
            ->with('seccao', $seccao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seccao  $seccao
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
     * Remove the specified resource from storage.
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
