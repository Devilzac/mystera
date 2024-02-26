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
        Schema::create('alt_main_characters', function (Blueprint $table) {
            $table->unsignedBigInteger('alt_id');
            $table->unsignedBigInteger('main_characters_id');

            $table->foreign('alt_id')->references('id')->on('alts')->onDelete('cascade');
            $table->foreign('main_characters_id')->references('id')->on('main_characters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alt_main_characters');
    }
};
