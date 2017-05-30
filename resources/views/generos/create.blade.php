<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
</head>

<body>


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

                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</html>

