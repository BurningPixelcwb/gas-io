<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintEntregaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entregas', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_id_venda');
            $table->unsignedBigInteger('fk_id_veiculo');

            $table->foreign('fk_id_venda')->references('id')->on('vendas')->onDelete('cascade');
            $table->foreign('fk_id_veiculo')->references('id')->on('veiculos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entregas', function (Blueprint $table) {
            $table->dropColumn('fk_id_venda');
            $table->dropColumn('fk_id_veiculo');
        });
    }
}
