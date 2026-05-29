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
        Schema::table('transactions', function (Blueprint $table) {
            $table->json('cart_data')->nullable()->after('credits');
            $table->foreignId('foundation_id')->nullable()->after('cart_data')->constrained('foundations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['foundation_id']);
            $table->dropColumn(['cart_data', 'foundation_id']);
        });
    }
};
