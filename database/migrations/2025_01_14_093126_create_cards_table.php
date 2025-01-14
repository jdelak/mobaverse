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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_name');
            $table->enum('card_type', ['Hero', 'Item', 'Skill']);
            $table->text('card_description')->nullable();
            $table->integer('mana_cost')->nullable();
            $table->integer('attack')->nullable();
            $table->integer('health')->nullable();
            $table->string('image');
            $table->json('effect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
