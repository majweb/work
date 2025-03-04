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
            $table->foreignId('aplication_user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aplications', function (Blueprint $table) {
            $table->dropForeign(['aplication_user_id']);
            $table->dropColumn(['aplication_user_id','name','surname','phone','email']);
        });
    }
};
