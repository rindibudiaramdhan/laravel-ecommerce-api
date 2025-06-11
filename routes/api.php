<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function (Request $request) {
    return ['pong' => true, 'Laravel' => app()->version()];
});

Route::middleware('api.key')->get('/orders', function (Request $request) {
    return 'pong';
});