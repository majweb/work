<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Data publikacji ogłoszenia (pierwsza aktywacja) - firma i rekruter mogą je edytować tylko
 * przez 24 godziny od tej chwili.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->timestamp('published_at')->nullable()->after('is_active');
        });

        // Istniejące ogłoszenia traktujemy jako opublikowane w dniu utworzenia - starsze niż 24h są od razu zablokowane
        DB::table('projects')->update(['published_at' => DB::raw('created_at')]);
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });
    }
};
