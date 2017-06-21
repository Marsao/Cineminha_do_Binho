@extends('app.layouts')
@section('content')

    <div class="container">
        <div class="row">

            <h1 class="page-header">Edição de Filme</h1>

            <div class="col-md-6">
                <form action="{{ route('filmes.update', $filme->id) }}" method="post">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="titulo">titulo</label>
                        <input id="titulo" class="form-control" type="text" name="titulo" value="{{$filme->titulo}}">

                    </div>
                    <div class="form-group">
                        <label for="ano">Ano</label>
                        <input id="ano" class="form-control" type="text" name="ano" value="{{$filme->ano}}">
                    </div>
                </form>
                    <form action="{{route('generos.update', $genero->id)}}" method="post">
                        {{csrf_field()}}

                            <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="nome">Nome do Gênero</label>
                            <input id="nome" class="form-control" type="text" name="nome" value="{{$genero->nome}}">
                        </div>
                    </form>

                     <form action="{{route('ators.update', $ators->id)}}" method="post">
                        {{csrf_field()}}

                            <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="nome">Nome do Ator</label>
                            <input id="nome" class="form-control" type="text" name="nome" value="{{$ators->nome}}">
                        </div>
                    </form>



                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
            
            </div>
        </div>
    </div>

@endsection