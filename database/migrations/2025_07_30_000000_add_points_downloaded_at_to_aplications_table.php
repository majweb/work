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
        Schema::table('aplications', function (Blueprint $table) {
            $table->timestamp('points_downloaded_at')->nullable()->after('status_changed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aplications', function (Blueprint $table) {
            $table->dropColumn('points_downloaded_at');
        });
    }
};
