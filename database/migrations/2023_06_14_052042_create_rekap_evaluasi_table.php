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
        Schema::create('rekap_evaluasi', function (Blueprint $table) {
            $table->id();
            $table->enum('nilai', ['A', 'B', 'C', 'D', 'E']);
            $table->integer('ip_perangkat');
            $table->integer('id_pengampuh');
            $table->integer('id_pertanyaan');
            $table->integer('id_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekap_evaluasi');
    }
};
