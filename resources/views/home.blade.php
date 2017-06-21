@extends('layouts.app')
@section('content')
  <div class="container">
                <div class="panel-heading"><h3>Pagina Inicial</h3></div>


                <div class="panel-body">
                   
                   Que tal criar um novo filme????
                   <br>
                   <a class="btn" href="{{route('filmes.create')}}">
                   criar
                   </a> 
        </div>
    </div>
@endsection

