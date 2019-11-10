@extends('layouts.bo')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Inserir tipo de notícia</h1>

<div class="card shadow mb-4">
    <div class="card-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('inserir-tipo') }}" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Nome do tipo de notícia</label>

                <div class="col-md-6">
                    <input id="nome_tipo" type="text" class="form-control @error('nome_tipo') is-invalid @enderror" name="nome_tipo" value="{{ old('nome_tipo') }}" autofocus>

                    @error('nome_tipo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Descrição do tipo</label>

                <div class="col-md-6">
                    <textarea id="descricao_tipo" type="text" class="form-control @error('descricao_tipo') is-invalid @enderror" name="descricao_tipo" autofocus rows="4"></textarea>

                    @error('descricao_tipo')
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
                    <a href="{{ route('lista-tipos') }}">
                        <button class="btn btn-danger" type="button">Cancelar</button>
                    </a>
                </div>
            </div>

        </form>
    </div>


    @endsection