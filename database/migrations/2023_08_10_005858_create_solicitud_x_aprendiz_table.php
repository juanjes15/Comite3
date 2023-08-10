<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudXAprendizTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('solicitud_x_aprendiz', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sol_id'); // Llave foránea a SolicitudComite
            $table->unsignedBigInteger('apr_id'); // Llave foránea a Aprendiz

            $table->foreign('sol_id')->references('id')->on('solicitud_comite'); // Referencia a SolicitudComite
            $table->foreign('apr_id')->references('id')->on('aprendizs'); // Referencia a Aprendiz
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitud_x_aprendiz');
    }
}
