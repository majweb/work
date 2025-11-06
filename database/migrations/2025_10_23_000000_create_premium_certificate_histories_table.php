<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('premium_certificate_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('firm_id')->constrained()->onDelete('cascade');
            $table->string('certificate_path');
            $table->integer('level');
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamp('generated_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('premium_certificate_histories');
    }
};
