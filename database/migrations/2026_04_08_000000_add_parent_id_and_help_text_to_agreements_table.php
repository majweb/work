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
        Schema::table('agreements', function (Blueprint $table) {
            if (!Schema::hasColumn('agreements', 'parent_id')) {
                $table->foreignId('parent_id')->nullable()->constrained('agreements')->onDelete('cascade');
            }
            if (!Schema::hasColumn('agreements', 'help_text')) {
                $table->json('help_text')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agreements', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropColumn(['parent_id', 'help_text']);
        });
    }
};
