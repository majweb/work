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
        Schema::table('projects', function (Blueprint $table) {
            $table->decimal('bonusSalaryFrom', 8, 2)->nullable()->change();
            $table->time('hoursFrom')->nullable()->change();
            $table->time('hoursTo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->decimal('bonusSalaryFrom', 8, 2)->nullable(false)->change();
            $table->time('hoursFrom')->nullable(false)->change();
            $table->time('hoursTo')->nullable(false)->change();
        });
    }
};
