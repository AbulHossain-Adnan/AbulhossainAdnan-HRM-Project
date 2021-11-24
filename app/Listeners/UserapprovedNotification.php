<?php

namespace App\Listeners;

use App\Events\userapproved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserapprovedNotification
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
     * @param  userapproved  $event
     * @return void
     */
    public function handle(userapproved $event)
    {
        //
    }
}
