<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giocatore',function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('squadra');
            $table->enum('ruolo',['D','C','A']);
            $table->integer('età')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('partite_giocate')->unsigned();
            $table->integer('gol')->unsigned();
            $table->integer('assist')->unsigned();
            $table->integer('clean_sheet')->unsigned();
            $table->integer('tiri_tentati')->unsigned();
            $table->integer('tiri_in_porta')->unsigned();
            $table->integer('passaggi_tentati')->unsigned();
            $table->integer('passaggi_completati')->unsigned();
            $table->integer('contrasti_tentati')->unsigned();
            $table->integer('contrasti_vinti')->unsigned();
            $table->integer('ammonizioni')->unsigned();
            $table->integer('espulsioni')->unsigned();
            $table->integer('stipendio')->unsigned();
            $table->integer('valore_mercato')->unsigned();
            $table->date('scadenza_contratto');
        });

        Schema::create('giocatore_top',function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('squadra');
            $table->integer('valore_principale')->unsigned();
            $table->enum('ruolo',['D','C','A']);
            $table->integer('rank')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giocatore');
        Schema::dropIfExists('giocatore_top');
    }
};
