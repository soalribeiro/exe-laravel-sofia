<?php

namespace App\Http\Controllers;

use App\Jornal;
use App\User;
use App\Http\Requests\JornalStoreRequest;
use App\Http\Requests\JornalUpdateRequest;

/**
 * @group Jornais
 * 
 * Métodos para gerir jornais.
 */


class JornalController extends Controller
{
    /**
     * Mostrar todos os jornais e o utilizador associado.
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
     * Mostrar formulário para inserir novo jornal.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('inserir-jornal-form')
            ->with('users', $users);
    }

    /**
     * Inserir um novo jornal.
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

        return redirect()->route('lista-jornais');
    }

    /**
     * Mostrar um determinado jornal.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function show(Jornal $jornal)
    {
        return $jornal;
    }

    /**
     * Mostrar formulário para editar jornal.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornal $jornal)
    {
        return view('editar-jornal-form')
            ->with('jornal', $jornal);
    }

    /**
     * Editar um jornal específico.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function update(JornalUpdateRequest $request, Jornal $jornal)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;

            $jornal->update(array(
                'titulo-jor' => $data['titulo-jor'],
                'descricao-jor' => $data['descricao-jor'],
                'image' => $data['image'],
                'user_id' => $data['user_id']
            ));
        } else {
            $jornal->update(array(
                'titulo-jor' => $data['titulo-jor'],
                'descricao-jor' => $data['descricao-jor'],
                'user_id' => $data['user_id']
            ));
        }

        $response = [
            'data' => $jornal,
            'message' => 'Jornal editado',
            'result' => 'OK'
        ];

        //return response($response, 200);
        return redirect()->route('lista-jornais');
    }

    /**
     * Remover um jornal.
     *
     * @param  \App\Jornal  $jornal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornal $jornal)
    {
        $jornal->delete();

        return redirect()->route('lista-jornais');
    }
}
