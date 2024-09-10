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
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->longText('description')->nullable();
            $table->string('nip')->nullable()->unique();
            $table->string('regon')->nullable()->unique();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('country')->nullable();
            $table->json('contact_phone')->nullable();
            $table->boolean('invoice_same')->default(1);
            $table->string('name_invoice')->nullable()->unique();
            $table->string('nip_invoice')->nullable()->unique();
            $table->string('regon_invoice')->nullable()->unique();
            $table->string('street_invoice')->nullable();
            $table->string('number_invoice')->nullable();
            $table->string('city_invoice')->nullable();
            $table->string('postal_invoice')->nullable();
            $table->string('country_invoice')->nullable();
            $table->string('www')->nullable();
            $table->string('opinion_google')->nullable();
            $table->string('opinion_trust')->nullable();
            $table->string('opinion_facebook')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_google')->nullable();
            $table->string('social_x')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_tiktok')->nullable();
            $table->string('count_workers')->nullable();
            $table->string('annual_turnover')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firms');
    }
};
