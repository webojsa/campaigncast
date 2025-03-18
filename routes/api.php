<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function(){
    Route::post('register',[\App\Http\Controllers\AuthController::class, 'register']);
    Route::post('login',[\App\Http\Controllers\AuthController::class, 'login'])->middleware(['throttle:login']);
    Route::post('logout',[\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::middleware('auth:sanctum')->group(function(){

    Route::get('test', function(Request $request){
        return response()->json(['message' => 'Authenticated', 'user' => $request->user()]);
    });

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin',
        'as' => 'admin'
    ], function(){
        Route::get('dashboard', function () {
            return response()->json(['message' => 'Welcome, AdminMIddleware']);
        });
    });

});
