<?php

namespace App\Listeners;

use App\Events\UserChangedPhoneNumber;
use App\Services\Welcome\WelcomeService;

class UserChangedPhoneNumberListener
{
    /**
     * Handle the event.
     */
    public function handle(UserChangedPhoneNumber $event): void
    {
        $service = app(WelcomeService::class, ['user' => $event->user]);
        $service->sendSms();
        $service->sendViber();
    }
}
