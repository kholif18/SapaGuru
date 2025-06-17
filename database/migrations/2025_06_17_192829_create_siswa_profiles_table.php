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
        Schema::create('siswa_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nis')->unique();
            $table->string('nisn')->unique()->nullable();
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('nama_ortu');
            $table->string('no_telp_ortu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_profiles');
    }
};
