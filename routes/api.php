<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// test api return response json 'ok'
Route::get('/test', function () {
    return response()->json([
        'message' => 'ok'
    ], 200);
});