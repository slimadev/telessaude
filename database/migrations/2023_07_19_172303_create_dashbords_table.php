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
        Schema::create('dashbords', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('disease_id')->nullable();
            $table->foreign('province_id')->references('id')->on('simple_entities')->onDelete('cascade');
            $table->foreign('disease_id')->references('id')->on('simple_entities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashbords');
    }
};
