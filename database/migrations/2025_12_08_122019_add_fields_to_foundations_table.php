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
        Schema::table('foundations', function (Blueprint $table) {
            // Kategorie (relacja do foundation_categories)
            $table->json('category_id');
            $table->json('subcategory_id');

            // Informacje kontaktowe
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('www')->nullable();

            // Opis fundacji
            $table->longText('description')->nullable();

            // Adres
            $table->string('address_street')->nullable();
            $table->string('address_city')->nullable();
            $table->json('address_country')->nullable();

            $table->boolean('active')->default(true); // ⬅️ NOWA KOLUMNA


            // Dane o organizacji
            $table->year('year_of_foundation')->nullable();
            $table->integer('worker_count')->nullable();
            $table->boolean('benefit_organization')->default(false);

            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foundations', function (Blueprint $table) {
            // Usuwanie pól
            $table->dropColumn([
                'category_id',
                'subcategory_id',
                'phone',
                'email',
                'www',
                'active',
                'description',
                'address_street',
                'address_city',
                'address_country',
                'year_of_foundation',
                'worker_count',
//                'benefit_organization',
                'latitude',
                'longitude',
            ]);
        });
    }
};
