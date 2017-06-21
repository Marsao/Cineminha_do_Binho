@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">



            <h1 class="page-header">Criação de Filmes Maneiros XDXD</h1>

            <div class="col-md-6">
                <form action="{{route('filmes.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                    <label for="titulo">Titulo</label>
                        <input id="titulo" class="form" type="text" name="titulo" placeholder="Titulo">    
                        </div>
                   

                    <div class="form-group">
                        <label for="ano">Ano</label>
                        <input id="ano" class="form-control" type="text" name="ano" placeholder="Ano">

                    </div>


                    <div class="form-group">
                        <select  name="genero" id="genero" class="form-control browser-default">
                        <option value="" disabled selected>Gênero</option>
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                          
                            
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="ator" id="ator" class="form-control browser-default">
                            <option value="" disabled selected>Ator</option>
                            @foreach($atores as $ator)
                                <option value="{{$ator->id}}">{{$ator->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <br>
                <label >Ver filmes ja cadastrados</label><br>
                <a class="btn" href="{{route('filmes.index')}}">Mostrar</a>
            </div>
        </div>
    </div>
@endsection