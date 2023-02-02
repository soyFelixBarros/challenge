<?php

namespace Tests\Feature\Tournament;

use Tests\TestCase;
use App\Models\Gender;
use App\Models\Player;

class SimulateTest extends TestCase
{
    public function test_players_field_is_required()
    {
        $data = [];
        $response = $this->json('post', '/api/tournaments/simulate', $data);
        $response->assertStatus(422);
    }

    public function test_validate_number_players_is_even()
    {
        $data = $this->rowData();
        $response = $this->json('post', '/api/tournaments/simulate', $data);
        $response->assertStatus(200);
    }

    public function test_run_simulate()
    {
        $data = $this->rowData();
        $response = $this->json('post', '/api/tournaments/simulate', $data);
        $this->assertDatabaseHas('player_tournament', $response['pivot']);
    }

    private function rowData() : array
    {
        $id = rand(Gender::FERMALE, Gender::MALE);
        Gender::factory()->create([
            'id' => $id,
            'name' => ($id == Gender::FERMALE ? 'Fermale' : 'Male')
        ]);
        return [
            'gender_id' => $id,
            'players' =>  Player::factory(8)->create(['gender_id' => $id]),
        ];
    }
}
