<?php

namespace App\Services\Welcome\Channels;

use App\Models\User;
use App\Services\Welcome\WelcomeMessageInterface;
use Illuminate\Support\Facades\Log;

class WelcomePushChannel implements WelcomeMessageInterface
{

    public function send(User $user): bool{
        Log::channel('info')->info("Sending welcome push");
        return true;
    }
}
