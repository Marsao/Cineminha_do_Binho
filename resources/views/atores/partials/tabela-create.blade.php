<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ano Nascimento</th>
            <th></th>

        </tr>
    </thead>

    <tbody>
        @foreach($atores as $ator)
        <tr>
            <td>{{$ator->id}}</td>
            <td>{{$ator->nome}}</td>
            <td>{{$ator->ano}}</td>
            <td>
                <a class="btn btn-primary" href="/atores/{{$ator->id}}/edit">
                                    Editar
                                </a>

                <form style="display: inline;" action="{{route('atores.destroy', $ator->id)}}" method="post">

                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="delete">

                    <button class="btn btn-danger">Apagar</button>

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>