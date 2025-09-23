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
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_pendaftaran', ['Peserta Didik Baru', 'Mutasi']);
            $table->enum('jenjang', ['TK', 'SD', 'SMP', 'SMA']);
            $table->string('nama_peserta_didik'); // Nama lengkap
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(); // L = Laki-laki, P = Perempuan
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('no_hp2')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb');
    }
};
