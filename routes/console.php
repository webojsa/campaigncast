<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Dotenv\Dotenv;
use Illuminate\Support\Facades\Mail;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('testevent', function () {
    $user = \App\Models\User::find(7);
   // dd($user);
    event(new \App\Events\UserConfirmedEmail($user));
});

Artisan::command('testmail', function () {
    Mail::raw('Ovo je testni email putem Mailguna.', function ($message) {
        $message->to('nebilic@gmail.com')->subject('Testni Email');
    });
});
