<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->string('premium_certificate_path')->nullable();
            $table->integer('premium_certificate_level')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->dropColumn(['premium_certificate_path', 'premium_certificate_level']);
        });
    }
};
