<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedInteger('min_players');
            $table->unsignedInteger('max_players');
            $table->unsignedInteger('min_playing_time');
            $table->unsignedInteger('max_playing_time');
            $table->string('description');
            $table->unsignedInteger('min_player_age');
            $table->string('genre');
            $table->enum('status', ['private', 'submitted', 'approved', 'rejected']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
