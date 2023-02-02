<?php

namespace App\Models;

use App\Models\Gender;
use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends Model
{
    use HasFactory;

    public $table = 'tournaments';
    public $timestamps = false;
    protected $fillable = [
        'gender_id',
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class, 'player_tournament');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
