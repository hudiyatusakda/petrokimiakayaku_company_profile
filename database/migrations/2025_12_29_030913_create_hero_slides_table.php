<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();       // Judul (h2)
            $table->text('description')->nullable();   // Deskripsi (p)
            $table->string('image_path');              // Path gambar (misal: hero-images/gambar1.jpg)
            $table->boolean('is_active')->default(1);  // Status aktif/tidak (Default 1/Aktif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_slides');
    }
};
