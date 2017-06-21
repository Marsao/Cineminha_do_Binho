@extends('layouts.app')
@section('content')
    <div class="container">
    <div class"row">
        <h1>Criação de Playlist XDXD</h1>

            <div class="col-md-6">
                <form action="{{route('lista.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">    
                    <label>Nome da Playlist</label>
                    <input placeholder="Nome da Playlist" id="lista" type="text" name="lista" class="form-control">
                        
                    

                    <button type="submit" class="btn btn-primary" >Criar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
 