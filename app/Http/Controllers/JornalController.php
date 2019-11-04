<?php

namespace App\Http\Controllers;

use App\Jornal;
use Illuminate\Http\Request;
use App\Http\Requests\JornalStoreRequest;
use Illuminate\Support\Facades\Validator;

/**
 * @group Journal management
 * 
 * Methods for managing Journals.
 */


class JornalController extends Controller
{
    /**
     * Display all journals and the user who created it.
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

        return view('jornais')
            ->with('jornals', $jornals);
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
     * Insert a new journal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JornalStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $jornals = Jornal::create($data);

        $response = [
            'data' => $jornals,
            'message' => 'Jornal criado',
            'result' => 'OK'
        ];

        return response($response, 200);
    }

    /**
     * Display the journal.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function show(Jornal $jornal)
    {
        return $jornal;
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
     * Update a specific journal ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornal $jornal)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'titulo-jor' => 'string|max:255',
            'descricao-jor' => 'text|max:500',
            'image' => 'image',
            'user_id' => 'exists:users,id'
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;
        }

        $jornal->update($data);

        $response = [
            'data' => $jornal,
            'message' => 'Jornal editado',
            'result' => 'OK'
        ];

        return response($response, 200);
    }

    /**
     * Remove a specific journal ID.
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

        return response($response);
    }
}
