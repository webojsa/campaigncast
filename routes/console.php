<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Dotenv\Dotenv;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('testcmd', function () {
    $user = \App\Models\User::find(9);
   // dd($user);
    event(new \App\Events\UserConfirmedEmail($user));
});
