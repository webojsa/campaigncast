<?php

namespace App\Services\Welcome\Channels;

use App\Mail\WelcomeMessage;
use App\Models\User;
use App\Services\Welcome\WelcomeMessageInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailChannel implements WelcomeMessageInterface
{

    public function send(User $user): bool{
        Mail::to($user->email)->send(new WelcomeMessage($user));
        return true;
    }
}
