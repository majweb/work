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
        // Sprawdzenie czy tabela już istnieje
        if (!Schema::hasTable('candidate_project')) {
            Schema::create('candidate_project', function (Blueprint $table) {
                $table->id();
                $table->foreignId('candidate_id')->constrained()->onDelete('cascade');
                $table->foreignId('project_id')->constrained()->onDelete('cascade');
                $table->timestamps();

                // Dodanie unikalnego indeksu dla kombinacji candidate_id i project_id
                $table->unique(['candidate_id', 'project_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_project');
    }
};
