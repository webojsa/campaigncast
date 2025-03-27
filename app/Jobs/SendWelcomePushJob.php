<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\Welcome\Channels\WelcomeSmsChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomePushJob implements ShouldQueue
{
    use Queueable;

    public User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->onQueue('welcome');
    }

    /**
     * Execute the job.
     */
    public function handle(WelcomeSmsChannel $channel): void
    {
        $channel->send($this->user);
    }
}
