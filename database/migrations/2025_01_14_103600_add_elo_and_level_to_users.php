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
            $table->integer('current_elo')->default(1000);
            $table->integer('best_elo')->default(1000);
            $table->integer('account_level')->default(1);
            $table->integer('current_exp')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('current_elo');
            $table->dropColumn('best_elo');
            $table->dropColumn('account_level');
            $table->dropColumn('current_exp');
        });
    }
};
