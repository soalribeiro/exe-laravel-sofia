@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if (sizeof($noticias) > 0)
            <h2 class="text-center py-4">Notícias do jornal {{ $noticias[0]->jornal->{'titulo-jor'} }}</h2>

            <div class="row mb-5">
                <a href="{{ route('lista-jornais') }}">
                    <button type="button" class="btn btn-primary">Voltar</button>
                </a>
            </div>

            <div class="row">
                @foreach($noticias as $noticia)

                <div class="card mx-1" style="width: 18rem;">
                    <img src="/uploads/{{ $noticia->image }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text text-right"><strong>{{ $noticia->seccao->titulo_sec }} </strong></p>

                        <h4 class="card-title">{{ $noticia->{'titulo-not'} }}</h4>

                        <p class="card-text">{{ $noticia->{'corpo-not'} }}</p>

                        <p class="blockquote-footer text-right"><cite title="Source Title">{{ $noticia->user->name }}</cite></p>

                    </div>
                </div>

                @endforeach

            </div>

            @else

            <div class="row mb-5">
                <a href="{{ route('lista-jornais') }}">
                    <button type="button" class="btn btn-primary">Voltar</button>
                </a>
            </div>

            <h2 class="text-center py-4">Este jornal ainda não tem notícias.</h2>

            @endif

        </div>
    </div>
    @endsection