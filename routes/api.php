<?php

use App\Http\Controllers\CongViecController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/api-cong-viec',[CongViecController::class,'layData']);
Route::post('/tao-api-cong-viec',[CongViecController::class,'taoData']);
Route::post('/update-api-cong-viec',[CongViecController::class,'updateData']);
