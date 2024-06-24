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
        Schema::create('ketersediaan_kamars', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_kamar')->constrained('kamars')->onDelete('cascade');
        $table->date('tanggal_ketersediaan');
        $table->string('status_ketersediaan');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketersediaan_kamars');
    }
};
