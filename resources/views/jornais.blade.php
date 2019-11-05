@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h2 class="text-center py-4">Jornais publicados</h2>

            @foreach($jornals as $jornal)

            <div class="card" style="width: 18rem;">
                <img src="/uploads/{{ $jornal->image }}" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $jornal->{'titulo-jor'} }}</h4>

                    <p class="card-text"><strong>Descrição:</strong> {{ $jornal->{'descricao-jor'} }} </p>
                    <p class="card-text"><strong>Criado em:</strong> {{ $jornal->created_at }} </p>

                    <p class="blockquote-footer text-right"><cite title="Source Title">{{ $jornal->user->name }}</cite></p>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('lista-noticias') }}" class="btn btn-primary">Ler notícias</a>
                        </div>
                        <div class="col-md-4 offset-md-2">
                            <a href="{{ route('editar-jornal-form', $jornal->id) }}" class="btn btn-outline-primary btn-sm">Editar jornal</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>
@endsection