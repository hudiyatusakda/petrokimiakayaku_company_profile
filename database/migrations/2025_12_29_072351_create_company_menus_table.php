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
        Schema::create('company_menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // Judul (misal: Tentang Perusahaan)
            $table->string('image_path');  // Foto
            $table->string('url');         // Link tujuannya (misal: /tentang-perusahaan)
            $table->integer('sort_order')->default(0); // Untuk mengatur urutan
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_menus');
    }
};
