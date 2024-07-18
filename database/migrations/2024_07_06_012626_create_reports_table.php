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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('nama_pelapor');
            $table->integer('umur_pelapor');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('judul');
            $table->string('isi');
            $table->string('nama_terlapor');
            $table->integer('umur_terlapor');
            $table->string('hubungan');
            $table->string('status');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
