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
        Schema::create('professional_categories', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('simple_entities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_categories');
    }
};
