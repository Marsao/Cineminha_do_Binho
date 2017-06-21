

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="page-header">
                    Cadastrar novo Gênero
                </h1>


                <form method="post" action="{{ route('generos.store') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input class="form-control" type="text" name="nome" id="nome" value="">
                    </div>

                    <button class="btn btn-success" type="submit">Cadastrar</button>
                    <br>
                    <br>
                    <label>Mostrar Gênero Cadastrados</label>
                    <br>
                    <a class="btn" href="{{route('generos.index')}}">
                        Mostrar
                        </a>

                </form>
            </div>
        </div>
    </div>
    @endsection


