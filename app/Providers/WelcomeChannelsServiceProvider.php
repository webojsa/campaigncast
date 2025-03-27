<?php

namespace App\Providers;

use App\Services\Welcome\Channels\WelcomeEmailChannel;
use App\Services\Welcome\Channels\WelcomePushChannel;
use App\Services\Welcome\Channels\WelcomeSmsChannel;
use App\Services\Welcome\Channels\WelcomeViberChannel;
use Illuminate\Support\ServiceProvider;

class WelcomeChannelsServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(WelcomeEmailChannel::class, function () {
           return new WelcomeEmailChannel();
        });
        $this->app->singleton(WelcomeViberChannel::class, function () {
            return new WelcomeViberChannel();
        });
        $this->app->singleton(WelcomeSmsChannel::class, function () {
            return new WelcomeSmsChannel();
        });
        $this->app->singleton(WelcomePushChannel::class, function () {
            return new WelcomePushChannel();
        });
    }

}
