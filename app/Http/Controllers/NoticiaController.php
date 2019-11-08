<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\NoticiaUpdateRequest;
use App\Noticia;
use App\Jornal;
use App\Seccao;
use App\User;

/**
 * @group Notícias
 * 
 * Métodos para gerir notícias.
 */

class NoticiaController extends Controller
{
    /**
     * 
     * Apresentar todas as notícias.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::with('user')
            ->with('jornal')
            ->with('seccao')->get();

        $response = [
            'data' => $noticias,
            'message' => 'Listagem de notícias',
            'result' => 'OK'
        ];

        return view('noticias')
            ->with('noticias', $noticias);
    }

    /**
     * Mostrar formulário para criar nova notícia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $jornais = Jornal::all();
        $seccaos = Seccao::all();

        return view('inserir-noticia-form')
            ->with('users', $users)
            ->with('jornais', $jornais)
            ->with('seccaos', $seccaos);
    }

    /**
     * Criar nova notícia.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $noticias = Noticia::create($data);

        $response = [
            'data' => $noticias,
            'message' => 'Notícia criada.',
            'result' => 'OK'
        ];

        return redirect()->route('lista-noticias');
    }

    /**
     * Mostrar notícia em específico.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return $noticia;
    }

    /**
     * Mostrar formulário para editar notícia específica.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticium)
    {
        return view('editar-noticia-form')
            ->with('noticia', $noticium);
    }

    /**
     * Editar notícia específica.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaUpdateRequest $request, Noticia $noticium)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;

            $noticium->update(array(
                'titulo-not' => $data['titulo-not'],
                'corpo-not' => $data['corpo-not'],
                'image' => $data['image'],
                'user_id' => $data['user_id'],
                'jornal_id' => $data['jornal_id'],
                'seccao_id' => $data['seccao_id']
            ));
        } else {
            $noticium->update(array(
                'titulo-jor' => $data['titulo-not'],
                'corpo-jor' => $data['corpo-not'],
                'user_id' => $data['user_id'],
                'jornal_id' => $data['jornal_id'],
                'seccao_id' => $data['seccao_id']
            ));
        }

        $response = [
            'data' => $noticium,
            'message' => 'Notícia editada.',
            'result' => 'OK'
        ];

        return redirect()->route('lista-noticias');
    }

    /**
     * Apagar notícia específica.
     *
     * @param  \App\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticium)
    {
        $noticium->delete();

        return redirect()->route('lista-noticias');
    }

    /**
     * Mostrar notícias do jornal selecionado
     *
     * @return \Illuminate\Http\Response
     */
    public function listnotijor(Jornal $jornal)
    {
        $noticias = Noticia::with('user')
            ->with('jornal')
            ->with('seccao')
            ->where('jornal_id', $jornal->id)->get();

        $response = [
            'data' => $noticias,
            'message' => 'Listagem de notícias do jornal' . $jornal,
            'result' => 'OK'
        ];

        return view('lista-noticias-jornal')
            ->with('noticias', $noticias);
    }
}
