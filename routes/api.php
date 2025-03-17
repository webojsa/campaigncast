<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/test', function (Request $request) {
    return response()->json(['message' => 'Authenticated', 'user' => $request->user()]);
});
