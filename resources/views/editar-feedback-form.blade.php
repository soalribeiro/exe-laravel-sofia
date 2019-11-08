@extends('layouts.app')

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

                            <div class="col-md-6">
                                <select name="noticia_id" class="form-control">
                                    @foreach($noticias as $noticia)

                                    @if ($feedback->{'noticia_id'} == $noticia->id)
                                    <option value="{{ $noticia->id }}" selected="selected">{{ $noticia->{'titulo-not'} }}</option>
                                    @else
                                    <option value="{{ $noticia->id }}">{{ $noticia->{'titulo-not'} }}</option>
                                    @endif

                                    @endforeach
                                </select>

                                @error('noticia_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">Utilizador</label>

                            <div class="col-md-6">
                                <select name="user_id" class="form-control">
                                    @foreach($users as $user)

                                    @if ($feedback->{'user_id'} == $user->id)
                                    <option value="{{ $user->id }}" selected="selected">{{ $user->name }}</option>
                                    @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif

                                    @endforeach
                                </select>

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