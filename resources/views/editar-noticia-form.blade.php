@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="h3 mb-2 text-gray-800">Editar notícia</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('editar-noticia', $noticia->id) }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{method_field('put')}}

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Título da notícia</label>

                    <div class="col-md-6">
                        <input id="titulo-not" type="text" class="form-control @error('titulo-not') is-invalid @enderror" name="titulo-not" value="{{ $noticia->{'titulo-not'} }}" autofocus>

                        @error('titulo-not')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="corpo-not" class="col-md-4 col-form-label text-md-right">Corpo da notícia</label>

                    <div class="col-md-6">
                        <textarea id="corpo-not" type="text" rows="3" class="form-control @error('corpo-not') is-invalid @enderror" name="corpo-not">{{ $noticia->{'corpo-not'} }}</textarea>

                        @error('corpo-not')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label text-md-right">Imagem da notícia</label>

                    <div class="col-md-6">
                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="user_id" class="col-md-4 col-form-label text-md-right">Jornalista</label>

                    <div class="col-md-6">
                        <select name="user_id">
                            <option selected value="{{ $noticia->user_id }}"> {{ $noticia->user->name }} </option>
                        </select>

                        @error('user_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jornal_id" class="col-md-4 col-form-label text-md-right">Jornal</label>

                    <div class="col-md-6">
                        <select name="jornal_id">
                            <option selected value="{{ $noticia->jornal_id }}"> {{ $noticia->jornal->{'titulo-jor'} }} </option>
                        </select>

                        @error('jornal_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="seccao_id" class="col-md-4 col-form-label text-md-right">Secção</label>

                    <div class="col-md-6">
                        <select name="seccao_id">
                            <option selected value="{{ $noticia->seccao_id }}"> {{ $noticia->seccao->{'titulo_sec'} }} </option>
                        </select>

                        @error('seccao_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0 offset-md-4">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">
                            Finalizar edição
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

    @endsection