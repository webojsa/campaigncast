<?php

namespace App\Listeners;

use App\Events\UserRegisteredPush;
use App\Services\Welcome\WelcomeService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegisteredPushListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegisteredPush $event): void
    {
        $service = app(WelcomeService::class, ['user' => $event->user]);
        $service->sendPush();
    }
}
