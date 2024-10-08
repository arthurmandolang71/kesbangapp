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
        Schema::create('bentuk_kejadian', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_pemberi_info')->nullable();
            $table->string('judul')->nullable();
            $table->string('oknum')->nullable();
            $table->string('bagaimana')->nullable();
            $table->string('mengapa')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('waktu')->nullable();
            $table->string('katagori')->nullable();
            $table->string('sifat')->nullable();
            $table->string('kontak_person')->nullable();
            $table->string('foto')->nullable();
            $table->string('nama_kontak')->nullable();
            $table->string('no_kontak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bentuk_kejadian');
    }
};
