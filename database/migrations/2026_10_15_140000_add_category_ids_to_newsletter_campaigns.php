<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Polecane branże w newsletterze - linki do ofert z danej branży.
     */
    public function up(): void
    {
        Schema::table('newsletter_campaigns', function (Blueprint $table) {
            $table->json('category_ids')->nullable()->after('offer_ids');
        });
    }

    public function down(): void
    {
        Schema::table('newsletter_campaigns', function (Blueprint $table) {
            $table->dropColumn('category_ids');
        });
    }
};
