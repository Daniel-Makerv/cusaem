<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_usu',8);
            $table->string('img_usu')->nullable();
            $table->string('name_usu');
            $table->string('lastname_usu');
            $table->string('slug')->unique()->comment('para que tome el nombre separada por espacios en lugar del id');
            $table->date('date_usu');
            $table->enum('sexo_usu',['masculino','femenino']);
            $table->string('phone_usu',25);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('terms_usu',3)->nullable();
            $table->unsignedBigInteger('id_rol')->onDelete('cascade')->comment('llave foranea para hacer referencia a rol');
            $table->foreign('id_rol')->references('id_rol')->on('rols');
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
        Schema::dropIfExists('users');
    }
}
