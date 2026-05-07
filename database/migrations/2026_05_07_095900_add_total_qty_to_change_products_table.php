<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('change_products', function (Blueprint $table) {
            $table->integer('total_qty')->nullable()->after('qty');
        });

        // Initialize total_qty with the current value of qty for existing records
        DB::table('change_products')->whereNotNull('qty')->update(['total_qty' => DB::raw('qty')]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('change_products', function (Blueprint $table) {
            $table->dropColumn('total_qty');
        });
    }
};
