<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Test_counter;

class TstCntChange extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'TstCnt:Change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'TstCntChange';

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
		$test_counter= new Test_counter();
		$test_counter->increasing();
    }
}
