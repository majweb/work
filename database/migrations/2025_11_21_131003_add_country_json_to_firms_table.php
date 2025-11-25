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
        Schema::table('firms', function (Blueprint $table) {
            $table->json('countryJson')->nullable()->after('country');
            $table->json('countryInvoiceJson')->nullable()->after('country_invoice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->dropColumn('countryJson','countryInvoiceJson');
        });
    }
};
