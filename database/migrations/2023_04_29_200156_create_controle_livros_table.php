<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControleLivrosTable extends Migration
{

    public function up()
    {
        Schema::create('controle_livros', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cliente');
            $table->string('status');
            $table->date('data_de_alugar');

            $table->timestamps();

            $table->foreign('cliente')->references('id')->on('users');
        });
    }


    public function down()
    {
        Schema::dropIfExists('controle_livros');
    }
}
