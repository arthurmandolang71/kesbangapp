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
        Schema::create('bentuk_kejadian_tl', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_bentuk_kejadian')->nullable();
            $table->foreignUuid('id_forkompinda')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bentuk_kejadian_tl');
    }
};
