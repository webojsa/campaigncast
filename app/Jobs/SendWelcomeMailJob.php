<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\Welcome\Channels\WelcomeEmailChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeMailJob implements ShouldQueue
{
    use Queueable;

    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->onQueue('welcome');
    }

    /**
     * Execute the job.
     */
    public function handle(WelcomeEmailChannel $channel): void
    {
        $channel->send($this->user);
    }
}
