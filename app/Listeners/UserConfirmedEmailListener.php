<?php

namespace App\Listeners;

use App\Events\UserConfirmedEmail;
use App\Services\Welcome\WelcomeService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserConfirmedEmailListener
{


    /**
     * Handle the event.
     */
    public function handle(UserConfirmedEmail $event): void
    {
        $service = app(WelcomeService::class, ['user' => $event->user]);
        $service->send();
    }
}
