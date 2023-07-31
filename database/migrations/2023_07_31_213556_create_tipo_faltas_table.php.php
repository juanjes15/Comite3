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

        Schema::create('tipofaltas', function (Blueprint $table) {
            $table->id();
            $table->string('tpf_observacion');
            $table->integer('tpf_numero');
            $table->string('tpf_descripcion');
            $table->string('tpf_tipo');
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipofaltas');
    }
};
