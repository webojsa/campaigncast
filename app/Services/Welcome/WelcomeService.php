<?php

namespace App\Services\Welcome;

use App\Jobs\SendWelcomeMailJob;
use App\Jobs\SendWelcomePushJob;
use App\Jobs\SendWelcomeSmsJob;
use App\Jobs\SendWelcomeViberJob;
use App\Models\User;
use App\Services\Welcome\Channels\WelcomeEmailChannel;
use App\Services\Welcome\Channels\WelcomePushChannel;
use App\Services\Welcome\Channels\WelcomeSmsChannel;
use App\Services\Welcome\Channels\WelcomeViberChannel;

class WelcomeService
{
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

    public function send(bool $toQueue = true) :void
    {
        $this->sendMail($toQueue);
        if($this->user->phone){
            $this->sendSms($toQueue);
            $this->sendViber($toQueue);
        }
        if($this->user->push_token){
            $this->sendPush($toQueue);
        }

    }

    public function sendMail(bool $toQueue = true) :bool
    {
        if($toQueue){
            SendWelcomeMailJob::dispatch($this->user);
            return true;
        }
        $this->emailChannel->send($this->user);
        return true;
    }

    public function sendPush(bool $toQueue = true) :bool{
        if(!$this->user->push_token)
            return false;
        if($toQueue){
            SendWelcomePushJob::dispatch($this->user);
            return true;
        }

        $this->pushChannel->send($this->user);
        return true;
    }

    public function sendSms(bool $toQueue = true) :bool{
        if(!$this->user->phone)
            return false;

        if($toQueue){
            SendWelcomeSmsJob::dispatch($this->user);
            return true;
        }

        $this->smsChannel->send($this->user);
        return true;
    }

    public function sendViber(bool $toQueue = true): bool
    {
        if(!$this->user->phone)
            return false;

        if($toQueue){
            SendWelcomeViberJob::dispatch($this->user);
            return true;
        }

        $this->viberChannel->send($this->user);
        return true;
    }
}
