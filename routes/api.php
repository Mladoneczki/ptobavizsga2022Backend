<?php

use App\Http\Controllers\szakdogaController;
use App\Models\szakdoga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('szakdogas',[szakdogaController::class, 'index']);
Route::get('szakdogas/{id}',[szakdogaController::class, 'show']);
Route::post('szakdogas',[szakdogaController::class, 'store']);
Route::put('szakdogas/{id}',[szakdogaController::class, 'update']);
Route::delete('szakdogas/{id}',[szakdogaController::class, 'destroy']);