<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('test-view',[TestController::class,'index']);
Route::get('/danh-muc',[TestController::class,'indexDanhMuc']);
Route::get('/cong-viec',[TestController::class,'indexCongViec']);
Route::get('/danh-sach-don-hang',[TestController::class,'indexDanhSachDonHang']);
