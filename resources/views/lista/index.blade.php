
@extends('app.layouts')
@section('content')
    </head>
    <body>
    <div class="container">
       <div class="row">
          <div class="col-md-6">
               <div class="panel panel-default">
                  <div class="panel-heading">Playlist de: {{ Auth::user()->name }}</div>
                       <div class="panel-body">

                           <table class="table highlight bordered resposive-table">
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
                                    <td>
                                    <a class="btn" href="{{route('lista.show')}}">
                                        Adiciona Filminho
                                    </a>

                                        <a class="btn btn-primary" href="/lista/{{$lista->id}}/edit">
                                            Editar
                                        </a>

                                        <form style="display: inline;" action="{{route('lista.destroy', $lista->id)}}" method="post">
                                        
                                             {{csrf_field()}}

                                            <input type="hidden" name="_method" value="delete">

                                            <button class="btn btn-danger">Apagar</button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection