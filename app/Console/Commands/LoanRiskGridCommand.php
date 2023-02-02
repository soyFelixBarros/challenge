<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Rule;
use App\Models\Branch;
use Illuminate\Console\Command;
use App\Services\Grids\GridService;

class LoanRiskGridCommand extends Command
{
    const GRID = 20;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'risk:grid';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $input = [
            // "rule_structure_id" => 2,
            "rate" => 3,
            "term" => 4,
            "min_term" => 1,
            "max_amount" => 268000,
            "tna" => 33.18,
            "discount" => 0,
            "is_renovator" => true,
            "days" => [
                "15" => 22,
                "30" => 38
            ],
            "branch_id" => Branch::COL001,
            "rule_type" => Rule::GRID
        ];

        $startTime = now();
        $grids = app()->make(GridService::class)->run($input);

        $timeElapsed = Carbon::now()->diffForHumans($startTime);
        if ($grids["code"] != 200) {
            $this->info($grids["data"]["msg_detail"]);
            return $grids;
        }
        logger($timeElapsed);
        logger($grids);
        $this->info("Present grid");
        return 0;
    }
}
