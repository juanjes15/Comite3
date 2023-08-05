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
        Schema::create('normainfringida', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sol_id');
            $table->unsignedBigInteger('num_id');
            $table->foreign('sol_id')->references('id')->on('solicitudcomite')->onDelete('cascade');
            $table->foreign('num_id')->references('id')->on('numeral')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normainfringida');
    }
};
