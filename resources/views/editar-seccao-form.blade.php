@extends('layouts.bo')

@section('content')
<div class="container">

    <h1 class="h3 mb-2 text-gray-800">Editar secção - {{ $seccao->{'titulo_sec'} }}</h1>

    <div class="card shadow mb-4">
        <div class="card-body">

            <form class="form-horizontal" role="form" method="POST" action="{{ route('editar-seccao', $seccao->id) }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{method_field('put')}}

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Título da secção</label>

                    <div class="col-md-6">
                        <input id="titulo_sec" type="text" class="form-control @error('titulo_sec') is-invalid @enderror" name="titulo_sec" value="{{ $seccao->{'titulo_sec'} }}" autofocus>

                        @error('titulo_sec')
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
                        <a href="{{ route('lista-seccaos') }}">
                            <button class="btn btn-danger" type="button">Cancelar</button>
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endsection