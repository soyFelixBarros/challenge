<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerSkillFactory extends Factory
{
    public function definition()
    {
        $player = Player::factory()->create();
        return [
            'player_id' => $player->id,
            'reaction_time' => ($player->gender->id == Gender::FERMALE) ? rand(0, 100) : null,
            'strength' => ($player->gender->id == Gender::MALE) ? rand(0, 100) : null,
            'speed' =>  ($player->gender->id == Gender::MALE) ? rand(0, 100) : null,
        ];
    }
}
