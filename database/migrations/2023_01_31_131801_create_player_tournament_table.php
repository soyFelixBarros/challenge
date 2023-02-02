<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTournamentTable extends Migration
{
    public function up()
    {
        Schema::create('player_tournament', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('players');
            $table->foreignId('tournament_id')->constrained('tournaments');
            $table->boolean('is_winner')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('player_tournament');
    }
}
