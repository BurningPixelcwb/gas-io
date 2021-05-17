<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintRefillsProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('refills', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_id_produto');
            $table->unsignedBigInteger('fk_id_fornecedor');

            $table->foreign('fk_id_produto')->references('id')->on('produtos')->onDelete('cascade');
            $table->foreign('fk_id_fornecedor')->references('id')->on('fornecedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('refills', function (Blueprint $table) {
            $table->dropColumn('fk_id_produto');
            $table->dropColumn('fk_id_fornecedor');
        });
    }
}
