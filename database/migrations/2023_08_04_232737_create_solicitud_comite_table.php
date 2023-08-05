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
        Schema::create('solicitudcomite', function (Blueprint $table) {
            $table->id();
            $table->date('sol_fecha');
            $table->string('sol_lugar');
            $table->string('sol_asunto',7000);
            $table->string('sol_motivo',7000);
            $table->string('sol_estado');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_comite');
    }
};
