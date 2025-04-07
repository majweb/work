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
        Schema::create('cv_classics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('aplication_id')->nullable()->constrained('aplications')->onDelete('cascade');
            $table->foreignId('worker_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('birthday');
            $table->string('city');
            $table->string('postal');
            $table->string('cvStandardType');
            $table->json('experiences');
            $table->json('educations');
            $table->json('courses');
            $table->json('langs');
            $table->json('skills');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_classics');
    }
};
