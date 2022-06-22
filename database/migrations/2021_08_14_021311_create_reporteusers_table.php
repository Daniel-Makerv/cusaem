<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporteusers', function (Blueprint $table) {
            $table->bigIncrements('id_report',8);
            $table->string('name_report');
            $table->string('descripcion_report');
            $table->string('period_report');
            $table->string('generos_report');
            $table->string('registros_report');
            $table->timestamp("date_report");
            $table->unsignedBigInteger('id_usu')->onDelete('cascade')->comment('llave foranea para hacer referencia a users');
            $table->foreign('id_usu')->references('id_usu')->on('users');
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
        Schema::dropIfExists('reporteusers');
    }
}
