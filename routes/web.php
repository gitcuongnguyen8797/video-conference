<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinRoomController;
use App\Http\Controllers\FAQController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[JoinRoomController::class,'index']);
Route::post('/',[JoinRoomController::class,'JoinToRoom']);
Route::get('/faq',[FAQController::class,'pageFAQ'])->name('faq');