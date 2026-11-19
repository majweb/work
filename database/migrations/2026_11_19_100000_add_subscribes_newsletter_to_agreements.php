<?php

use App\Models\Agreement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Zgoda, której zaznaczenie przy rejestracji zapisuje do newslettera (GetResponse).
     */
    public function up(): void
    {
        Schema::table('agreements', function (Blueprint $table) {
            $table->boolean('subscribes_newsletter')->default(false)->after('is_required');
        });

        // Domyślnie: "Chcę otrzymywać informacje marketingowe od work4you.global -> na mój adres e-mail"
        Agreement::markWorkerMarketingConsentAsNewsletter();
    }

    public function down(): void
    {
        Schema::table('agreements', function (Blueprint $table) {
            $table->dropColumn('subscribes_newsletter');
        });
    }
};
