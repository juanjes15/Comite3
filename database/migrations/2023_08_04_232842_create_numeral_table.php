<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('numeral', function (Blueprint $table) {
            $table->id();
            $table->string('num_descripcion',7000);
            $table->string('num_tipofalta');
            $table->string('num_calificacion');
            $table->unsignedBigInteger('art_id');
            $table->foreign('art_id')->references('id')->on('articulos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numeral');
    }
};
