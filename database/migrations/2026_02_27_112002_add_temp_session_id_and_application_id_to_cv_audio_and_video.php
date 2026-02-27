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
        Schema::table('cv_audio', function (Blueprint $table) {
            $table->string('temp_session_id')->nullable()->index();
            $table->unsignedBigInteger('aplication_id')->nullable()->index();
            $table->foreign('aplication_id')->references('id')->on('aplications')->onDelete('cascade');
        });

        Schema::table('cv_videos', function (Blueprint $table) {
            $table->string('temp_session_id')->nullable()->index();
            $table->unsignedBigInteger('aplication_id')->nullable()->index();
            $table->foreign('aplication_id')->references('id')->on('aplications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cv_audio', function (Blueprint $table) {
            $table->dropForeign(['aplication_id']);
            $table->dropColumn(['temp_session_id', 'aplication_id']);
        });

        Schema::table('cv_videos', function (Blueprint $table) {
            $table->dropForeign(['aplication_id']);
            $table->dropColumn(['temp_session_id', 'aplication_id']);
        });
    }
};
