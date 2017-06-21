@extends('app.layouts')
@section('content')
    
    <div class="container">
         <div class="panel panel-default">
                    <div class="panel-heading">Playlist de: {{ Auth::user()->name }}</div>
                    <div class="panel-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach($listas as $lista)
                                <tr>
                                    <td>{{$lista->id}}</td>
                                    <td>{{$lista->nome}}</td>
                                    <td>{{$lista->filmes->nome}}</td>
                                     @endforeach
                                    <td>
                                        <a class="btn btn-primary" href="/lista/{{$lista->id}}/edit">
                                            Editar
                                        </a>

                                        <form style="display: inline;" action="{{route('lista.destroy', $filme->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn btn-danger">Apagar</button>
                                        </form>
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>

    </div>
    </div>
@endsection