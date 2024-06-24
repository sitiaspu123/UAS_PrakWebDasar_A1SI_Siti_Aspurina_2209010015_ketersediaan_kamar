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
        Schema::create('keluhans', function (Blueprint $table) {
        $table->id('id_keluhan');
        $table->foreignId('id_pasien')->constrained('pasiens')->onDelete('cascade');
        $table->foreignId('id_kamar')->constrained('kamars')->onDelete('cascade');
        $table->date('tanggal_keluhan');
        $table->string('deskripsi_keluhan');
        $table->string('status_keluhan');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhans');
    }
};
