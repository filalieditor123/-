<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DocentController;
use App\Http\Controllers\API\VakController;

Route::apiResource('docenten', DocentController::class);
Route::apiResource('vakken', VakController::class);
