<?php

namespace App\Listeners;

use App\Notificaiton;
use App\Subscription;

use App\events\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotification implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle(PostPublished $event)
    {
        

        return redirect('200');
    }

    public function ShouldQueue(PostPublished $subscribable)
    {
        

    }
}
