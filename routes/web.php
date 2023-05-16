<?php

use App\Http\Controllers\PhongController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => '/admin'], function () {
    Route::group(['prefix' => '/phong'], function () {
        Route::get('/index', [PhongController::class, 'index']);
        Route::post('/index', [PhongContrboller::class, 'store']);
    });
});
