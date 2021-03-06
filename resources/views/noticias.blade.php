@extends('layouts.bo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2 class="text-center py-4">Notícias publicadas</h2>

            @auth
            <div class="row mb-5">
                <a href="{{ route('inserir-noticia-form') }}">
                    <button type="button" class="btn btn-success">Inserir nova notícia</button>
                </a>
            </div>
            @endauth

            <div class="row">
                @foreach($noticias as $noticia)

                <div class="card mx-2 mb-2" style="width: 18rem;">

                    <a href="{{ route('noticia', $noticia->id) }}">
                        <img src="/uploads/{{ $noticia->image }}" class="card-img-top">
                    </a>

                    <div class="card-body">
                        <p class="card-text text-right"><strong>{{ $noticia->seccao->titulo_sec }} </strong></p>

                        <p class="card-text small" style="color: grey;">{{ $noticia->tipo->nome_tipo }}</p>

                        <h4 class="card-title">{{ $noticia->{'titulo-not'} }}</h4>

                        <p class="card-text">{{ $noticia->{'corpo-not'} }}</p>

                        <p class="card-text text-right"><strong>Jornal {{ $noticia->jornal->{'titulo-jor'} }} </strong></p>

                        <p class="blockquote-footer text-right"><cite title="Source Title">{{ $noticia->user->name }}</cite></p>

                        <div class="row">
                            <div class="col-md-8 text-left">
                                <a href="{{ route('noticia', $noticia->id) }}" class="btn btn-primary">Ler notícia</a>
                            </div>
                        </div>

                        @auth
                        @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
                        <div class="row">
                            <div class="col-md-12 text-center pr-0 mt-4">
                                <a href="{{ route('editar-noticia-form', $noticia->id) }}" class="btn btn-outline-primary btn-sm">Editar notícia</a>
                            </div>
                        </div>

                        <div class="col-md-12 text-center pr-0 mt-4">
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarNot{{ $noticia->id }}">Apagar notícia</button>
                        </div>

                        <div class="col-md-12 text-center pr-0 mt-1">
                            <a href="{{ route('lista-fb-noticia', $noticia->id) }}" class="btn btn-success btn-sm">Enviar feedback</a>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="eliminarNot{{ $noticia->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar notícia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem a certeza que pretende eliminar o notícia?
                            </div>
                            <div class="modal-footer">

                                <form action="{{ route('eliminar-noticia', $noticia->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>


                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    @endsection