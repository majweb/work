<?php

use App\Services\BrowserMarketDetector;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Artykuł należy do jednego rynku (kraju), jak baner - zamiast języka.
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('country_code', 5)->nullable()->after('lang')->index();
        });

        // Istniejące artykuły: główny kraj ich języka (pl -> pl, de -> de, en -> gb, fi -> fi)
        $detector = app(BrowserMarketDetector::class);
        DB::table('articles')->select('lang')->distinct()->pluck('lang')->each(function ($lang) use ($detector) {
            DB::table('articles')
                ->where('lang', $lang)
                ->update(['country_code' => $detector->countryForLanguage(strtolower((string) $lang)) ?? 'pl']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('lang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('lang')->default('pl')->after('country_code');
        });

        // Język wraca jako pierwszy język kraju artykułu
        DB::table('articles')->select('country_code')->distinct()->pluck('country_code')->each(function ($code) {
            $lang = DB::table('countries')->where('countryCode', $code)->value('lang');
            if (is_string($lang) && str_starts_with(trim($lang), '[')) {
                $lang = json_decode($lang, true)[0] ?? null;
            }

            DB::table('articles')->where('country_code', $code)->update(['lang' => $lang ?: 'pl']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropIndex(['country_code']);
            $table->dropColumn('country_code');
        });
    }
};
