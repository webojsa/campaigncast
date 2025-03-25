<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SubscribersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth','verified'])->name('home');

Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/subscribers/create', [SubscribersController::class, 'create'])
        ->name('subscribers.create');

    Route::post('/subscribers',[SubscribersController::class, 'storeSubscriber'])
        ->name('subscribers.store');
});
