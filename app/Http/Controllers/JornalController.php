<?php

namespace App\Http\Controllers;

use App\Http\Requests\JornalStoreRequest;
use App\Jornal;
use Illuminate\Http\Request;

class JornalController extends Controller
{
    /**
     * @group Journal management
     * 
     * Display all journals and the user who created it.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornals = Jornal::with('user')->get();

        //return response($jornals, 200); //status code correspondente à resposta do pedido

        $response = [
            'data' => $jornals,
            'message' => 'Listagem de jornais',
            'result' => 'OK'
        ];

        return response($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JornalStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        //return $file;

        $jornals = Jornal::create($data);

        //return $post;
        //return response($post, 201);

        $response = [
            'data' => $jornals,
            'message' => 'Jornal criado',
            'result' => 'OK'
        ];

        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function show(Jornal $jornal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornal $jornal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornal $jornal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornal $jornal)
    {
        //
    }
}
