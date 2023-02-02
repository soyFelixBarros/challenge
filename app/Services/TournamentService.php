<?php

namespace App\Services;

use App\Models\Tournament;
use App\Helpers\NumberHelper;
use App\Models\PlayerTournament;
use App\Exceptions\NumberPlayersIsOdd;

class TournamentService
{
    public function simulate(array $input) : array
    {
        $totalPlayers = count($input['players']);
        if (!NumberHelper::isEven($totalPlayers)) throw new NumberPlayersIsOdd;
        $tournament = $this->createTournament($input);
        return $this->game($tournament->players->toArray());
    }

    public function createTournament(array $data) : Tournament
    {
        $tournament = new Tournament;
        $tournament->gender_id = $data['gender_id'];
        $tournament->push();
        $tournament->players()->createMany($data['players']);
        $tournament->save();
        return $tournament;
    }

    public function game(array $players) : array
    {
        $competitors = $this->rounds($players);
        $totalRounds = count($competitors);
        $winners = [];
        $round = 0;
        while ($round != $totalRounds) {
            $winners[] = $this->play($competitors[$round]);
            $totalWinners = count($winners);
            if ($totalWinners == 1) return $this->setWinner($winners[$round]);
            if ($totalWinners == $totalRounds) {
                $competitors = $this->rounds($winners);
                $totalRounds = count($competitors);
            }
            $round++;
        }
        return [];
    }

    public function setWinner(array $player) : array
    {
        PlayerTournament::where($player['pivot'])->update(['is_winner' => true]);
        return $player;
    }

    public function play(array $players) : array
    {
        return $players[rand(0, 1)];
    }

    public function rounds(array $players) : array
    {
        $players = $this->unorderList($players);
        return array_chunk($players, 2);
    }

    public function unorderList(array $players) : array
    {
        return shuffle($players) ? $players : [];
    }
}