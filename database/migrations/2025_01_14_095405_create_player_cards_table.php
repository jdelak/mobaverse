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
        Schema::create('player_cards', function (Blueprint $table) {
            $table->foreignId('player_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('card_id')->constrained('cards')->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('level')->nullable();
            $table->primary(['player_id', 'card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_cards');
    }
};
