<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id_doc',8);
            $table->unsignedBigInteger('id_usu')->onDelete('cascade')->comment('llave foranea para hacer referencia a usuario');
            $table->foreign('id_usu')->references('id_usu')->on('users');
            $table->string('photo_doc')->comment('fotografia del usuario');
            $table->string('location_doc')->comment('croquis de ubucacion');
            $table->string('referent_doc')->comment('referencias de domicilio');
            $table->string('depend_doc')->comment('dependientes economicos');
            $table->string('letter_doc')->comment('precartilla, recibo de luz o cartilla liberada');
            $table->string('certificate_doc')->comment('certificado de estudios');
            $table->string('birthcert_doc')->comment('acta de nacimiento');
            $table->string('antecedent_doc')->comment('certificado de antecedentes no penales');
            $table->string('address_doc')->comment('comprobante de domicilio');
            $table->string('lettercard_doc')->comment('cartas de recomendacion');
            $table->string('curp_doc')->comment('CURP del usuario');
            $table->string('ine_doc')->comment('INE o IFE');
            $table->string('rfc_doc')->comment('registro federal de contribuyentes');
            $table->string('terms_doc',3)->comment('terminos para poder enviar la información');
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
        Schema::dropIfExists('documents');
    }
}
