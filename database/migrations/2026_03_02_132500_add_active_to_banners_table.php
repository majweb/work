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
        Schema::table('banners', function (Blueprint $table) {
            if (! Schema::hasColumn('banners', 'active')) {
                $table->boolean('active')->default(true)->after('url');
            }
            if (! Schema::hasColumn('banners', 'active_admin')) {
                $table->boolean('active_admin')->default(false)->after('active');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            if (Schema::hasColumn('banners', 'active')) {
                $table->dropColumn('active');
            }
            if (Schema::hasColumn('banners', 'active_admin')) {
                $table->dropColumn('active_admin');
            }
        });
    }
};
