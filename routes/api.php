<?php

use App\Http\Controllers\HitungGajiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// endpoint hitung gaji
Route::get('/gaji', [HitungGajiController::class, 'hitungGaji']);
