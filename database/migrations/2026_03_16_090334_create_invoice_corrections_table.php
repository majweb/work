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
        Schema::create('invoice_corrections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained()->onDelete('cascade');
            $table->string('number');
            $table->date('date_correction');
            $table->date('date_invoice');
            $table->string('amount');
            $table->string('pdf');
            $table->string('reason')->nullable();

            // Dane firmy w momencie wystawienia korekty (zrzut)
            $table->string('name_invoice');
            $table->string('nip_invoice');
            $table->string('street_invoice')->nullable();
            $table->string('postal_invoice')->nullable();
            $table->string('city_invoice')->nullable();
            $table->string('country_invoice')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_corrections');
    }
};
