<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Pełne linki do opinii i profili (np. Google Maps) są dłuższe niż 255 znaków.
     */
    public function up(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->string('opinion_google', 500)->nullable()->change();
            $table->string('opinion_trust', 500)->nullable()->change();
            $table->string('opinion_facebook', 500)->nullable()->change();
            $table->string('social_facebook', 500)->nullable()->change();
            $table->string('social_google', 500)->nullable()->change();
            $table->string('social_x', 500)->nullable()->change();
            $table->string('social_instagram', 500)->nullable()->change();
            $table->string('social_linkedin', 500)->nullable()->change();
            $table->string('social_tiktok', 500)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->string('opinion_google')->nullable()->change();
            $table->string('opinion_trust')->nullable()->change();
            $table->string('opinion_facebook')->nullable()->change();
            $table->string('social_facebook')->nullable()->change();
            $table->string('social_google')->nullable()->change();
            $table->string('social_x')->nullable()->change();
            $table->string('social_instagram')->nullable()->change();
            $table->string('social_linkedin')->nullable()->change();
            $table->string('social_tiktok')->nullable()->change();
        });
    }
};
