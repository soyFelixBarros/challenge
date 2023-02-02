<?php

namespace App\Console\Commands;

use App\Models\Branch;
use App\Models\Rule;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Services\Prefilters\PrefilterService;

class LoanRiskPrefilterCommand extends Command
{
    const PREFILTER = 10;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'risk:prefilter';

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
     * @return mixed
     */
    public function handle()
    {
        $input = [
            "rule_structure_id" => 1,
            "unique_identifier" => "98765437",
            "gender" => "M",
            "age" => 30,
            "nationality" => "V",
            "bank_id" => 2,
            "cellphone" => "1133275285",
            "email" => "test@test3.com",
            "salary" => 600000,
            "situation_job" => "militar",
            "roadmap" => 200,
            "branch_id" => Branch::COL001,
            "rule_type" => Rule::PREFILTER
        ];

        $prefilters = app()->make(PrefilterService::class)->run($input);

        if (!$prefilters["approved"]) {
            $this->info($prefilters["data"]["msg_detail"]);
            return $prefilters;
        }

        dd($prefilters);

        $this->info("Paso los prefilters");
    }
}
