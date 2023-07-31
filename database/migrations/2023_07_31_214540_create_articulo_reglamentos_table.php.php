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

        Schema::create('articuloreglamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('arti_numero');
            $table->string('arti_descripcion');
            $table->string('arti_tipo');
            $table->unsignedBigInteger('tpf_id');
            $table->foreign('tpf_id')->references('id')->on('tipofaltas');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articuloreglamentos');
    }
};