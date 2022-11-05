<?php

use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('login_info', [siteController::class, 'home']);
Route::get('wallet/login', [siteController::class, 'login']);
Route::post('wallet/store', [siteController::class, 'store']);
Route::get('wallet/show', [siteController::class, 'show']);

Route::get('recharges', [siteController::class, 'index2']);
Route::get('wallet/bkash', [siteController::class, 'bkash']);
Route::post('wallet/store2', [siteController::class, 'store2']);
