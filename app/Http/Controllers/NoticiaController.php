<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\User;
use App\Jornal;
use App\Seccao;
use App\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\NoticiaUpdateRequest;


class NoticiaController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();

        $noticias = Noticia::with('user')
            ->with('jornal')
            ->with('tipo')
            ->with('seccao')->get();

        return view('noticias')
            ->with('noticias', $noticias);
    }


    public function create()
    {
        $users = User::all();
        $jornais = Jornal::all();
        $seccaos = Seccao::all();
        $tipos = Tipo::all();

        return view('inserir-noticia-form')
            ->with('users', $users)
            ->with('jornais', $jornais)
            ->with('seccaos', $seccaos)
            ->with('tipos', $tipos);
    }


    public function store(NoticiaStoreRequest $request)
    {
        $data = $request->all();

        $file = $request->file('image')->store('images');

        $data['image'] = $file;

        $noticias = Noticia::create($data);

        return redirect()->route('lista-noticias');
    }

    
    public function show(Noticia $noticia)
    {
        return $noticia;
    }

    
    public function edit(Noticia $noticium)
    {
        $seccaos = Seccao::all();
        $jornais = Jornal::all();
        $tipos = Tipo::all();

        return view('editar-noticia-form')
            ->with('seccaos', $seccaos)
            ->with('jornais', $jornais)
            ->with('tipos', $tipos)
            ->with('noticia', $noticium);
    }

    
    public function update(NoticiaUpdateRequest $request, Noticia $noticium)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('images');
            $data['image'] = $file;

            $noticium->update($data);
        } else {
            $noticium->update(array(
                'titulo-not' => $data['titulo-not'],
                'corpo-not' => $data['corpo-not'],
                'jornal_id' => $data['jornal_id'],
                'seccao_id' => $data['seccao_id'],
                'user_id' => $data['user_id'],
                'tipo_id' => $data['tipo_id']
            ));
        }

        return redirect()->route('lista-noticias');
    }

    
    public function destroy(Noticia $noticium)
    {
        $noticium->delete();

        return redirect()->route('lista-noticias');
    }

    
    public function listnotijor(Jornal $jornal)
    {
        $noticias = Noticia::with('user')
            ->with('jornal')
            ->with('seccao')
            ->where('jornal_id', $jornal->id)->get();

        return view('lista-noticias-jornal')
            ->with('noticias', $noticias);
    }
}
