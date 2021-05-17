<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintVendaPessoaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_id_pessoa');
            $table->unsignedBigInteger('fk_id_produto');

            $table->foreign('fk_id_pessoa')->references('id')->on('pessoas')->onDelete('cascade');
            $table->foreign('fk_id_produto')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->dropColumn('fk_id_pessoa');
            $table->dropColumn('fk_id_produto');
        });
    }
}
