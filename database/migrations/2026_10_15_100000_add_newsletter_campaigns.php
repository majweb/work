<?php

use App\Models\Newsletter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('newsletters', function (Blueprint $table) {
            // Język strony w chwili zapisu - w tym języku osoba dostaje newsletter
            $table->string('locale', 10)->nullable()->after('country_code');
            // Dowód zgody: id zaznaczonych zgód, data i IP
            $table->json('consents')->nullable()->after('locale');
            $table->string('ip_address', 45)->nullable()->after('consents');
            $table->timestamp('getresponse_synced_at')->nullable()->after('ip_address');
        });

        // Obecni subskrybenci: język wyliczony z kraju zapisu
        DB::table('newsletters')->select('country_code')->distinct()->pluck('country_code')
            ->each(fn ($code) => DB::table('newsletters')
                ->where('country_code', $code)
                ->update(['locale' => Newsletter::localeForCountryCode($code)]));

        Schema::create('newsletter_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('preheader')->nullable();
            $table->string('title');
            $table->text('intro')->nullable();
            $table->longText('content');
            $table->string('cta_text')->nullable();
            $table->string('cta_url')->nullable();
            $table->json('offer_ids')->nullable();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });

        // Jedna wersja językowa wysyłki = jeden szkic w GetResponse
        Schema::create('newsletter_campaign_locales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('newsletter_campaign_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 10);
            $table->unsignedInteger('recipients_count')->default(0);
            $table->string('status', 20)->default('pending');
            $table->json('translated')->nullable();
            $table->string('getresponse_newsletter_id')->nullable();
            $table->text('error')->nullable();
            $table->timestamps();

            $table->unique(['newsletter_campaign_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_campaign_locales');
        Schema::dropIfExists('newsletter_campaigns');

        Schema::table('newsletters', function (Blueprint $table) {
            $table->dropColumn(['locale', 'consents', 'ip_address', 'getresponse_synced_at']);
        });
    }
};
