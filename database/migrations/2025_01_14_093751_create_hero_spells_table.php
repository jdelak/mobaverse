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
        Schema::create('hero_spells', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->string('spell_name');
            $table->text('spell_description')->nullable();
            $table->integer('mana_cost');
            $table->string('image');
            $table->json('effect')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_spells');
    }
};
