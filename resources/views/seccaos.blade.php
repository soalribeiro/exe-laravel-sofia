@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h2 class="text-center py-4">Secções existentes</h2>

            @auth
            @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
            <div class="row mb-5">
                <a href="{{ route('inserir-seccao-form') }}">
                    <button type="button" class="btn btn-success">Inserir nova secção</button>
                </a>
            </div>
            @endif
            @endauth

            <div class="row">
                @foreach($seccaos as $seccao)
                <div class="card w-100 mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col pl-5 pt-3">
                                <h4 class="card-title">{{ $seccao->{'titulo_sec'} }}</h4>
                            </div>

                            @auth
                            @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
                            <div class="col pt-2">
                                <a href="{{ route('editar-seccao-form', $seccao->id) }}" class="btn btn-outline-primary btn-sm float-right">Editar secção</a>
                            </div>

                            <div class="col pt-2">
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminarSeccao{{ $seccao->id }}">Apagar secção</button>
                            </div>
                            @endif
                            @endauth
                        </div>

                    </div>
                </div>

                <!-- Modal -->

                @auth
                @if (Auth::user()->role->name === 'admin' || Auth::user()->role->name === 'editor')
                <div class="modal fade" id="eliminarSeccao{{ $seccao->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar secção</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem a certeza que pretende eliminar a secção?
                            </div>
                            <div class="modal-footer">

                                <form action="{{ route('eliminar-seccao', $seccao->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>


                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endauth

                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection