@extends('layouts.app')
    
@section('content')
<div class="container">
<div class="row">

    <h1 class="page-header">Inserção de Atores</h1>

    <div class="col-md-6">
        <form action="{{ route('atores.store')}}" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <label for="nome">Nome</label>
                <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome">

            </div>
            <div class="form-group">
                <label for="ano">Ano nascimento</label>
                <input id="ano" class="form-control" type="text" name="ano" placeholder="Ano">

            </div>

            
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
            <label >Ver atores já cadastrados</label><br>
                <a class="btn" href="{{route('atores.index')}}">Mostrar</a>
    </div>
</div>
</div>
@endsection



