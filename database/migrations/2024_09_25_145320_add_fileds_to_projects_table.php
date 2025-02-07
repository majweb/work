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
            $table->json('category');
            $table->json('categorySub');
            $table->json('profession')->nullable();
            $table->json('position')->nullable();
            $table->json('workingMode');
            $table->json('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['category','categorySub','profession','position','workingMode','country']);
        });
    }
};
