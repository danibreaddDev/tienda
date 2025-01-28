<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

//login
Route::get("login",[LoginController::class,"loginForm"])->name("login");
Route::post("login",[LoginController::class,"login"]);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware', 'roles:admin,client'],function () {
    Route::resource("Products",ProductController::class);
});

