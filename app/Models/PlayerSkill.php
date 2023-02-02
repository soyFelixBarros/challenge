<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerSkill extends Model
{
    use HasFactory;

    public $table = 'player_skilles';
    public $timestamps = false;
    protected $fillable = [
        'reaction_time',
        'strength',
        'speed',
    ];
}
