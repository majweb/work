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
            $table->boolean('is_required')->default(false)->after('is_active');
        });

        // Ustawienie is_required dla zgód z gwiazdką w opisie PL
        \App\Models\Agreement::all()->each(function ($agreement) {
            $plDescription = $agreement->getTranslation('description', 'pl');
            if (str_contains($plDescription, '*')) {
                $agreement->is_required = true;
                $agreement->save();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agreements', function (Blueprint $table) {
            $table->dropColumn('is_required');
        });
    }
};
