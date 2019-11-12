@extends('layouts.bo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center py-4">Editar feedback</h2>

            <div class="card shadow mb-4">
                <div class="card-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('editar-feedback', $feedback->id) }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{method_field('put')}}

                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">Texto do feedback</label>

                            <div class="col-md-6">
                                <textarea name="descricao" id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" rows="6">{{ $feedback->descricao }}</textarea>

                                @error('descricao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noticia_id" class="col-md-4 col-form-label text-md-right">Notícia</label>

                            <div class="col-md-6 mb-0">
                                <p class="pt-1 mb-0">{{ $feedback->noticia->{'titulo-not'} }}</p>
                                <input type="text" class="invisible @error('user_id') is-invalid @enderror" name="user_id" value="{{ $feedback->noticia_id }}">

                                @error('noticia_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">Utilizador</label>

                            <div class="col-md-6 mb-0">
                                <p class="pt-1 mb-0">{{ $feedback->user->name }}</p>
                                <input type="text" class="invisible @error('user_id') is-invalid @enderror" name="user_id" value="{{ $feedback->user_id }}">

                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 offset-md-4">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Submeter
                                </button>
                            </div>
                            <div class="col-md-2 offset-md-4">
                                <a href="{{ route('lista-noticias') }}">
                                    <button class="btn btn-danger" type="button">Cancelar</button>
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection