@extends('layouts.bo')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Inserir Jornal</h1>

<div class="card shadow mb-4">
    <div class="card-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('inserir-jornal') }}" enctype="multipart/form-data">

            {{ csrf_field() }}
            {{method_field('put')}}

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">Título</label>

                <div class="col-md-6">
                    <input id="titulo-jor" type="text" class="form-control @error('titulo-jor') is-invalid @enderror" name="titulo-jor" value="{{ old('titulo-jor') }}" autofocus>

                    @error('titulo-jor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descricao-jor" class="col-md-4 col-form-label text-md-right">Descrição do jornal</label>

                <div class="col-md-6">
                    <input id="descricao-jor" type="text" class="form-control @error('descricao-jor') is-invalid @enderror" name="descricao-jor" value="{{ old('descricao-jor') }}">

                    @error('descricao-jor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Capa do jornal</label>

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
                        <option selected value="{{ $jornal->user_id }}"> {{ $jornal->user_id }} </option>
                    </select>

                    @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Finalizar edição
                    </button>
                </div>
            </div>
        </form>
    </div>


    @endsection