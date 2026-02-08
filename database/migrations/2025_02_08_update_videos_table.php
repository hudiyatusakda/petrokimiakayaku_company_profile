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
        Schema::table('videos', function (Blueprint $table) {
            // Tambahkan kolom yang belum ada
            if (!Schema::hasColumn('videos', 'slug')) {
                $table->string('slug')->unique()->after('title');
            }
            if (!Schema::hasColumn('videos', 'description')) {
                $table->longText('description')->nullable()->after('youtube_id');
            }
            if (!Schema::hasColumn('videos', 'duration')) {
                $table->string('duration')->nullable()->after('upload_date');
            }
            if (!Schema::hasColumn('videos', 'views')) {
                $table->integer('views')->default(0)->after('is_active');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn(['slug', 'description', 'duration', 'views']);
        });
    }
};
