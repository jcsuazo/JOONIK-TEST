<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/locations", LocationController::class . "@index");
