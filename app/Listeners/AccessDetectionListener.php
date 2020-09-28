<?php

namespace App\Listeners;

use App\Events\AccessDetection;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AccessDetectionListener
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
     * @param  AccessDetection  $event
     * @return void
     */
    public function handle(AccessDetection $event)
    {
        //
        echo ('Access Detected param=' . $event->param);
    }
}
