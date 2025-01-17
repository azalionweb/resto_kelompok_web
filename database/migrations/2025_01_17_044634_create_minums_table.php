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
        Schema::create('minums', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mnm', 20);
            $table->string('nama_mnm', 100);
            $table->integer('harga_mnm');
            $table->string('tipe_mnm', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minums');
    }
};
