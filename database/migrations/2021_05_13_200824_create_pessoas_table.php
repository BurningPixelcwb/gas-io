<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 55);
            $table->string('sobrenome', 255);
            $table->integer('idade');
            $table->biginteger('cpf');
            $table->biginteger('cep');
            $table->string('rua', 255);
            $table->string('bairro', 255);
            $table->string('cidade', 255);
            $table->string('estado', 55);
            $table->string('observcao', 255);
            $table->integer('tipo_pessoa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
