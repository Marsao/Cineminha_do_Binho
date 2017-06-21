<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Lista $lista, Filme $filme)
    {
           $lista = Lista::find($lista);
           $filme = Filme::lists($titulo , $id);
           return view('lista.show', compact('lista','filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
           
             return view('lista.create', compact('lista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $lista = new Lista();
         $lista->nome = $request->lista; 
         $lista->save();
         
         return view('lista.index', compact('lista'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function index(Lista $lista)
    {
        $lista = Lista::all();
         return view('lista.index', compact('lista'));
    }

    /**
     * Show the form for editing the specified <resource class=""></resource>
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function edit(Lista $lista)
    {
        return view('lista.edit', compact('lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lista $lista)
    {
        $lista->nome = $request->nome;
        $lista->filme_id = $request->filme;

        $lista->save();

        return redirect()->route('lista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lista $lista)
    {
        $lista->delete();
        return redirect('/lista');
    }
    //Adiciona filmes a lista

       public function addfilme(Request $request, Lista $lista, Filme $filme)
    {
            $lista = Lista::find($lista);
            $lista->filme()->attach($request->filme_id);
            return view('listas.show', compact('lista'));
    }
}
