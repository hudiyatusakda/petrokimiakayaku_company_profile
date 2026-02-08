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
        Schema::table('articles', function (Blueprint $table) {
            // Tambahkan kolom yang belum ada
            if (!Schema::hasColumn('articles', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            if (!Schema::hasColumn('articles', 'description')) {
                $table->longText('description')->nullable()->after('image_path');
            }
            if (!Schema::hasColumn('articles', 'views')) {
                $table->integer('views')->default(0)->after('is_active');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['slug', 'description', 'views']);
        });
    }
};
