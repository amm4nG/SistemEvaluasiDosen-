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
        Schema::create('pengampuh_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->integer('id_prodi');
            $table->string('kode_matakuliah');
            $table->string('nidn');
            $table->integer('id_periode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengampuh_matakuliah');
    }
};
