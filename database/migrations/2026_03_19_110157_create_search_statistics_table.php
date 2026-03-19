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
        Schema::create('search_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('category')->nullable();
            $table->string('category_sub')->nullable();
            $table->string('profession')->nullable();
            $table->string('position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_statistics');
    }
};
