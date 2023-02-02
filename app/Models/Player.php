<?php

namespace App\Models;

use App\Gender;
use App\Models\Tournament;
use App\Models\PlayerSkill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    public $table = 'players';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'gender_id'
    ];

    public function skill()
    {
        return $this->belongsTo(PlayerSkill::class);
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }
    
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
