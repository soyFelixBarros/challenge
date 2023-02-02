<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Services\TournamentService;
use App\Http\Controllers\Controller;
use App\Exceptions\NumberPlayersIsOdd;
use App\Http\Requests\Tournament\SimulatePostRequest;

class TournamentController extends Controller
{
    private $service;

    public function __construct(TournamentService $service)
    {
        $this->service = $service;
    }

    public function simulate(SimulatePostRequest $request)
    {
        $input = $request->all();
        try {
            $response = $this->service->simulate($input);
        } catch (NumberPlayersIsOdd $e) {
            return response()->json(['errors' => $e->getMessage()], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage(), 'file' => $e->getFile(), 'line' => $e->getLine()], 400);
        }

        return response()->json($response);
    }
}
