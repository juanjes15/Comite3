<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->id();
            $table->date('com_fechaSolicitud');
            $table->string('com_descripcionSolicitud');
            $table->string('com_tipoFalta');
            $table->string('com_carpetaAnexos');
            $table->string('com_acta');
            $table->string('com_estado');
            $table->string('com_recomendacion');
            $table->unsignedBigInteger('ins_id');
            $table->foreign('ins_id')->references('id')->on('instructors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comites');
    }
};