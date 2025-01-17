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
        Schema::create('makans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mkn', 20);
            $table->string('nama_mkn', 100);
            $table->decimal('harga', 10, 2);
            $table->string('tipe_mkn', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makans');
    }
};
