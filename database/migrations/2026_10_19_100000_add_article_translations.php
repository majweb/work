<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Tłumaczenia artykułów admina na rynki: jedna wersja na język, przypisana do wielu krajów.
 */
return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            // Wersja językowa wskazuje polski oryginał; usunięcie oryginału usuwa wersje
            $table->foreignId('source_article_id')->nullable()->after('user_id')->constrained('articles')->cascadeOnDelete();
            // Język tekstu artykułu (wersje językowe i przetłumaczone oryginały)
            $table->string('locale', 5)->nullable()->after('country_code');
            // Rynki wersji językowej (kody krajów) - widoczna we wszystkich krajach swojego języka;
            // country_code zostaje rynkiem głównym
            $table->json('countries')->nullable()->after('locale');
        });

        // Tłumaczenie oryginału na jeden język: stan, wybrane rynki, utworzona wersja i koszt
        Schema::create('article_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_article_id')->constrained('articles')->cascadeOnDelete();
            $table->string('locale', 5);
            $table->foreignId('article_id')->nullable()->constrained('articles')->nullOnDelete();
            $table->string('status')->default('pending');
            $table->json('countries');
            $table->text('error')->nullable();
            // Wersja poprawiona ręcznie - ponowne tłumaczenie wymaga potwierdzenia
            $table->boolean('edited_manually')->default(false);
            $table->unsignedInteger('prompt_tokens')->default(0);
            $table->unsignedInteger('completion_tokens')->default(0);
            $table->decimal('cost_usd', 8, 4)->default(0);
            $table->timestamps();

            $table->unique(['source_article_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('article_translations');

        Schema::table('articles', function (Blueprint $table) {
            $table->dropConstrainedForeignId('source_article_id');
            $table->dropColumn(['locale', 'countries']);
        });
    }
};
