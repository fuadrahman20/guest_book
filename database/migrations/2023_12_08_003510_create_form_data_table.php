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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah_tamu');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('domisili');
            $table->string('tujuan');
            $table->string('staff')->nullable();
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
