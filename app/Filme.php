<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    public function genero()
    {
        return $this->belongsTo('App\Genero');
    }

    public function ator()
    {
        return $this->belongsTo('App\Ator');
    }
    public function listas()
    {
        return $this->belongsToMany('App\Lista');
            
    }
}