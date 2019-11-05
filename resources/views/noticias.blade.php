@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($noticias as $noticia)

            <div class="card" style="width: 18rem;">
                <img src="/uploads/{{ $noticia->image }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $noticia->{'titulo-jor'} }}</h4>

                    <p class="card-text"><strong>Descrição:</strong> {{ $noticia->{'descricao-jor'} }} </p>
                    <p class="card-text"><strong>Criado em:</strong> {{ $noticia->created_at }} </p>

                    <p class="blockquote-footer text-right"><cite title="Source Title">{{ $noticia->user->name }}</cite></p>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('editar-noticia-form', $noticia->id) }}" class="btn btn-primary">Ler notícias</a>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            <a href="{{ route('editar-noticia-form', $noticia->id) }}" class="btn btn-outline-primary btn-sm">Editar noticia</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection