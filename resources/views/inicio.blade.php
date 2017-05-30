<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    </head>
    <body>

                    <h1 class="page-body">
                        Lista de filmes
                        <br/>
                        <a class="waves-effect waves-light btn-large" href="filmes/create">Criar novo filme</a>
                    </h1>

                    <ul>
                        @foreach($filmes as $filme)
                            <li>{{$filme->id}} - {{$filme->titulo}} , {{$filme->ano}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    </body>
   
</html>