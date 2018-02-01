<?php

namespace App\Listeners;

use App\Events\TstCntChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTstCntChanged
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
     * @param  TstCntChanged  $event
     * @return void
     */
    public function handle(TstCntChanged $event)
    {
        //
		dump(123);
    }
}
