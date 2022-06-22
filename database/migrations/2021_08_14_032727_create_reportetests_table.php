<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportetestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportetests', function (Blueprint $table) {
            $table->bigIncrements('id_reporttest',8);
            $table->string('name_reporttest');
            $table->string('descripcion_reportest');
            $table->string('period_reporttest');
            $table->string('generos_reporttest');
            $table->string('registros_reporttest');
            $table->timestamp('date_reporttest');
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
        Schema::dropIfExists('reportetests');
    }
}
