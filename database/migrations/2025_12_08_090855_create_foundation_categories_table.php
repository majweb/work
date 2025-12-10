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
        Schema::create('foundation_categories', function (Blueprint $table) {
            $table->id();
            $table->json('name'); // tłumaczenia
            $table->unsignedBigInteger('parent_id')->nullable(); // drzewo kategorii
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundation_categories');
    }
};
