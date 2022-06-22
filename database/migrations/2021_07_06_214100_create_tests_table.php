<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id_test',8);
            $table->unsignedBigInteger('id_usu')->onDelete('cascade')->comment('llave foranea para hacer referencia a users');
            $table->foreign('id_usu')->references('id_usu')->on('users');
            $table->string('pregunta_uno')->comment('');
            $table->string('pregunta_dos')->comment('');
            $table->string('pregunta_tres')->comment('');
            $table->string('pregunta_cuatro')->comment('');
            $table->string('pregunta_cinco')->comment('');
            $table->string('pregunta_seis')->comment('');
            $table->string('pregunta_siete')->comment('');
            $table->string('pregunta_ocho')->comment('');
            $table->string('pregunta_nueve')->comment('');
            $table->string('pregunta_diez')->comment('');
            $table->string('pregunta_once')->comment('');
            $table->string('pregunta_doce')->comment('');
            $table->string('pregunta_trece')->comment('');
            $table->string('pregunta_catorce')->comment('');
            $table->string('pregunta_quince')->comment('');
            $table->string('pregunta_dieciseis')->comment('');
            $table->string('pregunta_diecisiete')->comment('');
            $table->string('pregunta_dieciocho')->comment('');
            $table->string('pregunta_diecinueve')->comment('');
            $table->string('pregunta_veinte')->comment('');
            $table->string('pregunta_veintiuno')->comment('');
            $table->string('pregunta_veintidos')->comment('');
            $table->string('pregunta_veintitres')->comment('');
            $table->string('pregunta_veinticuatro')->comment('');
            $table->string('pregunta_veinticinco')->comment('');
            $table->string('pregunta_veintiseis')->comment('');
            $table->string('pregunta_veintisiete')->comment('');
            $table->string('pregunta_veintiocho')->comment('');
            $table->string('pregunta_veintinueve')->comment('');
            $table->string('pregunta_treinta')->comment('');
            $table->string('pregunta_treinta_y_uno')->comment('');
            $table->string('pregunta_treinta_y_dos')->comment('');
            $table->string('pregunta_treinta_y_tres')->comment('');
            $table->string('pregunta_treinta_y_cuatro')->comment('');
            $table->string('pregunta_treinta_y_cinco')->comment('');
            $table->string('pregunta_treinta_y_seis')->comment('');
            $table->string('pregunta_treinta_y_siete')->comment('');
            $table->string('pregunta_treinta_y_ocho')->comment('');
            $table->string('pregunta_treinta_y_nueve')->comment('');
            $table->string('pregunta_cuarenta')->comment('');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
