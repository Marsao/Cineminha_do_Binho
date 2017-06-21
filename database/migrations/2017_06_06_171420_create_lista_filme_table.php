<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaFilmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('filme_lista', function(Blueprint $table)
  {
      $table->integer('lista_id')->unsigned();
      $table->foreign('lista_id')->references('id')->on('listas');

      $table->integer('filme_id')->unsigned();
      $table->foreign('filme_id')->references('id')->on('filmes');

      $table->Timestamps();
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
