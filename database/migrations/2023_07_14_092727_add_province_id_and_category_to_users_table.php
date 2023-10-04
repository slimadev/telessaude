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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('province');
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('framing_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('province_id')->references('id')->on('simple_entities')->onDelete('cascade');
            $table->foreign('framing_id')->references('id')->on('simple_entities')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('simple_entities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('province_id');
            $table->dropColumn('framing_id');
            $table->dropColumn('category_id');
        });
    }
};
