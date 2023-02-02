<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayerTournament extends Model
{
    use HasFactory;

    public $table = 'player_tournament';
    public $timestamps = false;
}
