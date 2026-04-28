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
            $table->index('recruiter_id');
            $table->index('created_at');
        });

        Schema::table('aplications', function (Blueprint $table) {
            $table->index('project_id');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropIndex(['recruiter_id']);
            $table->dropIndex(['created_at']);
        });

        Schema::table('aplications', function (Blueprint $table) {
            $table->dropIndex(['project_id']);
            $table->dropIndex(['status']);
        });
    }
};
