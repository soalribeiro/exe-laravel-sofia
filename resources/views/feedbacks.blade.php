@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2 class="text-center py-4">Feedbacks escritos</h2>

            <div class="row mb-5">
                <a href="{{ route('inserir-feedback-form') }}">
                    <button type="button" class="btn btn-success">Inserir novo feedback</button>
                </a>
            </div>

            <div class="row">
                @foreach($feedbacks as $feedback)

                <div class="card mx-2 mb-2" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text text-right text-secondary small">{{ $feedback->created_at }}</p>

                        <p class="card-text text-left"><strong>{{ $feedback->descricao }}</strong></p>


                        <p class="blockquote-footer text-right"><cite title="Source Title">{{ $feedback->user->name }}, em notícia "{{ $feedback->noticia->{'titulo-not'} }}"</cite></p>

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{ route('editar-feedback-form', $feedback->id) }}" class="btn btn-outline-primary">Editar feedback</a>
                            </div>

                            <div class="col-md-6 text-right">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarFeedback{{ $feedback->id }}">Apagar feedback</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="eliminarFeedback{{ $feedback->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                <form action="{{ route('eliminar-feedback', $feedback->id) }}" method="POST">
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