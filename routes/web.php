<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/desc/{ref}', [WebsiteController::class, 'desc'])->name('content.desc');


Route::group(['middleware' => 'auth'],function() {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index']);
    });
});
Route::get('/login', [AdminController::class, 'login']);