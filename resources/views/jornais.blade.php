@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2 class="text-center py-4">Jornais publicados</h2>

            <div class="row mb-5">
                <a href="{{ route('inserir-jornal-form') }}">
                    <button type="button" class="btn btn-success">Inserir novo jornal</button>
                </a>
            </div>

            <div class="row">
                @foreach($jornals as $jornal)
                <div class="card mr-2 col-sm" style="width: 18rem;">
                    <img src="/uploads/{{ $jornal->image }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title text-center">{{ $jornal->{'titulo-jor'} }}</h4>

                        <p class="card-text"><strong>Descrição:</strong> {{ $jornal->{'descricao-jor'} }} </p>
                        <p class="card-text"><strong>Criado em:</strong> {{ $jornal->created_at }} </p>

                        <p class="blockquote-footer text-right"><cite title="Source Title">{{ $jornal->user->name }}</cite></p>

                        <div class="col-md-10 text-center mx-auto">
                            <a href="{{ route('lista-noticias-jornal', $jornal->id) }}" class="btn btn-primary">Ler notícias</a>
                        </div>

                        <div class="col-md-8 text-center mx-auto my-1">
                            <a href="{{ route('editar-jornal-form', $jornal->id) }}" class="btn btn-outline-primary btn-sm ">Editar jornal</a>
                        </div>

                        <div class="col-md-9 text-center mx-auto mt-4">
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarJornal{{ $jornal->id }}">Apagar jornal</button>
                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="eliminarJornal{{ $jornal->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar jornal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem a certeza que pretende eliminar o jornal?
                            </div>
                            <div class="modal-footer">

                                <form action="{{ route('eliminar-jornal', $jornal->id) }}" method="POST">
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
</div>
@endsection