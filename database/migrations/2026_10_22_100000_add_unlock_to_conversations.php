<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Płatne odczytanie wiadomości od kandydata: firma/rekruter odblokowuje rozmowę z nowym pracownikiem za punkty.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->timestamp('unlocked_at')->nullable()->after('accepted_at');
            $table->foreignId('unlocked_by_id')->nullable()->after('unlocked_at')->constrained('users')->nullOnDelete();
            $table->unsignedInteger('unlock_points')->nullable()->after('unlocked_by_id');
        });

        // Rozmowy sprzed wprowadzenia opłaty pozostają dostępne
        DB::table('conversations')->update(['unlocked_at' => DB::raw('created_at')]);
    }

    public function down(): void
    {
        Schema::table('conversations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('unlocked_by_id');
            $table->dropColumn(['unlocked_at', 'unlock_points']);
        });
    }
};
