@extends('layouts.site')
    
@section('conteudo')
<div class="row">
    <div class="col-md-6">
        
          @include('atores.partials.header', ['titulo' => 'Lista de Atores'] )

        <a href="/atores/create" class="btn btn-primary">Cadastrar</a>
            


        <div class="panel panel-default">
            <div class="panel-heading">Dados da tabela</div>
            <div class="panel-body">

                @include('atores.partials.tabela-create')


            </div>
        </div>

    </div>
</div>
@endsection


@section('titulo', 'Página inicial de Atores')
    