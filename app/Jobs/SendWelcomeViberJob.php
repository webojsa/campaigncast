<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\Welcome\Channels\WelcomeEmailChannel;
use App\Services\Welcome\Channels\WelcomeViberChannel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeViberJob implements ShouldQueue
{
    use Queueable;
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->onQueue('campaigns');
    }

    /**
     * Execute the job.
     */
    public function handle(WelcomeViberChannel $channel): void
    {
        $channel->send($this->user);
    }
}
