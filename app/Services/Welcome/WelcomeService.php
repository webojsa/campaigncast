<?php

namespace App\Services\Welcome;

use App\Models\User;
use App\Services\Welcome\Channels\WelcomeEmailChannel;
use App\Services\Welcome\Channels\WelcomePushChannel;
use App\Services\Welcome\Channels\WelcomeSmsChannel;
use App\Services\Welcome\Channels\WelcomeViberChannel;

class WelcomeService
{
    private bool $queue = true;
    private User $user;
    private WelcomeEmailChannel $emailChannel;
    private WelcomePushChannel $pushChannel;
    private WelcomeSmsChannel $smsChannel;
    private WelcomeViberChannel $viberChannel;

    public function __construct(User $user, WelcomeEmailChannel $emailChannel, WelcomePushChannel $pushChannel, WelcomeSmsChannel $smsChannel, WelcomeViberChannel $viberChannel){
        $this->user = $user;
        $this->emailChannel = $emailChannel;
        $this->pushChannel = $pushChannel;
        $this->smsChannel = $smsChannel;
        $this->viberChannel = $viberChannel;

    }
    public function setMode(bool $queue = null): void{
        if($queue)
            $this->queue = $queue;
    }
    public function send() :void
    {
        $this->sendMail();
        if($this->user->phone){
            $this->sendSms();
            $this->sendViber();
        }
        if($this->user->push_token){
            $this->sendPush();
        }

    }

    public function sendMail() :bool
    {
        $this->emailChannel->send($this->user);
        return true;
    }

    public function sendPush() :bool{
        if(!$this->user->push_token)
            return false;

        $this->pushChannel->send($this->user);
        return true;
    }

    public function sendSms() :bool{
        if(!$this->user->phone)
            return false;

        $this->smsChannel->send($this->user);
        return true;
    }

    public function sendViber(): bool
    {
        if(!$this->user->phone)
            return false;

        $this->viberChannel->send($this->user);
        return true;
    }
}
