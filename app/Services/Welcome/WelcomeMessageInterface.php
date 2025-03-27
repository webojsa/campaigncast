<?php

namespace App\Services\Welcome;

use App\Models\User;

interface WelcomeMessageInterface
{
    public function send(User $user): bool;
}
