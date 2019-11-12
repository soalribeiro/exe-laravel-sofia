@extends('layouts.bo')

@section('content')

<div class="row-md-10 mb-4">
    <a href="{{ URL::previous() }}">
        <button type="button" class="btn btn-primary">Voltar</button>
    </a>
</div>


@if (sizeof($noticia) > 0)
<div class="row">
    <div class="col-md-4">
        <div class="card mb-4 border-left-primary">
            <img src="/uploads/{{ $noticia[0]->{'image'} }}" style="width: 100%">

            <div class="row">
                <div class="col-md-4">
                    <p class="text-left pt-3 pl-4">{{ $noticia[0]->jornal->{'titulo-jor'} }}</p>
                </div>

                <div class="col-md-8">
                    <p class="blockquote-footer text-right pt-3 pr-4"><strong>Jornalista: </strong><cite>{{ $noticia[0]->user->name }}</cite></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card mb-4 py-2 px-4 border-left-primary">
            <div class="card-body">

                <div class="row">
                    <p class="text-gray-50 small">{{ $noticia[0]->tipo->nome_tipo }}</p>
                </div>

                <div class="row">
                    <h1 class="h3 mb-2 text-gray-800">{{ $noticia[0]->{'titulo-not'} }}</h1>
                </div>

                <div class="row">
                    <p class="mb-2 text-gray-800 pb-4">{{ $noticia[0]->{'corpo-not'} }}</p>
                </div>

                <div class="row">
                    <div class="col-md-2 text-black-50 text-md-right">Criada a</div>

                    <div class="col-md-10">
                        {{ $noticia[0]->created_at }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 text-black-50 text-md-right">Jornal</div>

                    <div class="col-md-10">
                        {{ $noticia[0]->jornal->{'titulo-jor'} }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 text-black-50 text-md-right">Secção</div>

                    <div class="col-md-10">

                        {{ $noticia[0]->seccao->titulo_sec }}

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endif

@auth
@if (Auth::user()->role->name === 'reporter' | Auth::user()->role->name === 'admin')

@if (sizeof($feedbacks) > 0)
<h4 class="text-center pt-5 pb-3">Feedbacks recebidos nesta notícia</h4>

<div class="row px-4 mx-auto">
    @foreach ($feedbacks as $feedback)
    <div class="card mx-2 mb-2" style="width: 21rem; background-color: rgba(255, 185, 45, 0.85);">
        <div class="card-header text-center"><strong>Feedback de {{ $feedback->user->name }}</strong></div>
        <div class="card-body">
            <p class="card-text text-left"><i>{{ $feedback->descricao }}</i></p>
        </div>
        <div class="card-footer">
            <p class="card-text text-secondary small text-right" style="color: #2b2b2b !important; font-weight: 600">{{ $feedback->created_at }}</p>
        </div>
    </div>
    @endforeach
</div>

<div class="col-md-12 text-center pr-0 mt-1">
    <a href="{{ route('lista-fb-noticia', $noticia[0]->id) }}" class="btn btn-dark">Enviar novo feedback</a>
</div>

@endif
@endif
@endauth

@endsection