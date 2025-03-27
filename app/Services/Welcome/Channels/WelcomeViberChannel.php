<?php

namespace App\Services\Welcome\Channels;

use App\Models\User;
use App\Services\Welcome\WelcomeMessageInterface;
use Illuminate\Support\Facades\Log;

class WelcomeViberChannel implements WelcomeMessageInterface
{
    /**
     * Create a new class instance.
     */
    public function send(User $user): bool
    {
        Log::channel('info')->info("Sending welcome viber: $user->phone");
        return true;
    }
}
