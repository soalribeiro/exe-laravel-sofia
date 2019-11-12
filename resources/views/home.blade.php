@extends('layouts.bo')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Bem-vindo/a {{ Auth::user()->name }}!</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Estás com a sessão iniciada! 🥳

                    <div class="cold-md-12 text-center pt-3 mx-auto">
                        <a href="{{ route('index') }}" class="btn btn-primary" style="background-color: #ffb92d; border-color: #ffb92d; color: #2b2b2b">Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection