<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SubscribersController;
use App\Http\Controllers\Web\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Web\Admin\DashboardController as AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'verified'])->group(function(){

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/subscribers/create', [SubscribersController::class, 'create'])
        ->name('subscribers.create');

    Route::post('/subscribers',[SubscribersController::class, 'storeSubscriber'])
        ->name('subscribers.store');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');


    Route::middleware(['auth','admin'])->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    });
});


