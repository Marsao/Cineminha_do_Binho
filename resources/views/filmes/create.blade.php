<!DOCTYPE html>
<html lang="en">

<head>
    <title>Criação de filmes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

</head>

<body>

    <div class="container">
        <div class="row">



            <h1 class="page-header">Criação de Filmes Maneiros XDXD</h1>

            <div class="col-md-6">
                <form action="{{ route('filmes.store')}}" method="post">
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
                        <select multiple name="genero" id="genero" class="form-control">
                        <option value="" disabled selected>Gênero</option>
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>

                    <div class="form-group">
                        <select name="ator" id="ator" class="form-control">
                            <option value="" disabled selected>Ator</option>
                            @foreach($atores as $ator)
                                <option value="{{$ator->id}}">{{$ator->nome}}</option>
                            @endforeach
                            
                        
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</body>

</html>