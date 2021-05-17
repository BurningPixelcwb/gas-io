<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintTpPessoaTpMoradia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_id_tp_pessoa');
            $table->unsignedBigInteger('fk_id_tp_moradia');

            $table->foreign('fk_id_tp_pessoa')->references('id')->on('tipo_pessoas')->onDelete('cascade');
            $table->foreign('fk_id_tp_moradia')->references('id')->on('tipo_moradias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoas', function (Blueprint $table) {
            $table->dropColumn('fk_id_tp_pessoa');
            $table->dropColumn('fk_id_tp_moradia');
        });
    }
}
