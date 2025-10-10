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
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('alt', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            $table->json('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn([
                'meta_title',
                'meta_description',
                'short_description',
                'alt',
                'meta_keywords',
                'category',
            ]);
        });
    }
};
