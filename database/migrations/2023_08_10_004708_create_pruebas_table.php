<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->string('pru_tipo');
            $table->string('pru_descripcion');
            $table->datetime('pru_fecha');
            $table->string('pru_url');
            $table->unsignedBigInteger('sol_id'); // Llave foránea

            $table->foreign('sol_id')->references('id')->on('solicitud_comite'); // Referencia a la tabla SolicitudComite
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pruebas');
    }
};