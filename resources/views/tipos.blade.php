@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2 class="text-center py-4">Tipos de notícia existentes</h2>

            @auth
            @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
            <div class="row mb-5">
                <a href="{{ route('inserir-tipo-form') }}">
                    <button type="button" class="btn btn-success">Inserir novo tipo</button>
                </a>
            </div>
            @endif
            @endauth

            <div class="row">
                @foreach($tipos as $tipo)
                <div class="card w-100 mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 pl-5 pt-1">
                                <h4 class="card-title">{{ $tipo->nome_tipo }}</h4>
                                <p>{{ $tipo->descricao_tipo }}</h4>
                            </div>

                            @auth
                            @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
                            <div class="col-md-2 pt-5">
                                <a href="{{ route('editar-tipo-form', $tipo->id) }}" class="btn btn-outline-primary btn-sm float-right">Editar tipo</a>
                            </div>

                            <div class="col-md-2 pt-5">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarTipo{{ $tipo->id }}">Apagar tipo</button>
                            </div>
                            @endif
                            @endauth
                        </div>

                    </div>
                </div>

                <!-- Modal -->

                @auth
                @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
                <div class="modal fade" id="eliminarTipo{{ $tipo->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar tipo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem a certeza que pretende eliminar este tipo de notícia?
                            </div>
                            <div class="modal-footer">

                                <form action="{{ route('eliminar-tipo', $tipo->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>


                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endauth

                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection