<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;


Route::get("/locations", LocationController::class . "@index");
