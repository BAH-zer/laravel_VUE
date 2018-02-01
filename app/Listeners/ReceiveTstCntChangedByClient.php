<?php

namespace App\Listeners;

use App\Events\TstCntChangedByClient;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Test_counter;

class ReceiveTstCntChangedByClient
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TstCntChangedByClient  $event
     * @return void
     */
    public function handle(TstCntChangedByClient $event)
    {
    	$e = 1/0;
		/*$test_counter= new Test_counter();
		$test_counter->increasing();*/
    }
}
