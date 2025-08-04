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
            $table->unsignedBigInteger('opened_by_user_id')->nullable();
            $table->timestamp('opened_at')->nullable();
            $table->unsignedBigInteger('status_changed_by_user_id')->nullable();
            $table->timestamp('status_changed_at')->nullable();

            $table->foreign('opened_by_user_id')->references('id')->on('users');
            $table->foreign('status_changed_by_user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aplications', function (Blueprint $table) {
            $table->dropForeign(['opened_by_user_id']);
            $table->dropForeign(['status_changed_by_user_id']);
            $table->dropColumn(['opened_by_user_id', 'opened_at', 'status_changed_by_user_id', 'status_changed_at']);

        });
    }
};
