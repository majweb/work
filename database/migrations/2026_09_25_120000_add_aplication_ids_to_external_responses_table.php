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
        Schema::table('external_responses', function (Blueprint $table) {
            // Aplikacje udostępnione w zaproszeniu - token daje dostęp tylko do nich
            $table->json('aplication_ids')->nullable()->after('token');
            $table->foreignId('sender_id')->nullable()->after('aplication_ids')->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('external_responses', function (Blueprint $table) {
            $table->dropConstrainedForeignId('sender_id');
            $table->dropColumn('aplication_ids');
        });
    }
};
