<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopCardController;
use App\Http\Controllers\UserController;
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

//index
Route::get("/", function () {
    return view("index");
})->name("index");
//login
Route::get("login", [LoginController::class, "loginForm"])->name("login");
Route::post("login", [LoginController::class, "login"]);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
//Pagina principal products solo te hacen falta el listar productos y el ver un producto
Route::group(['middleware'=> 'role:client,admin'], function () {
    Route::get("Products", [ProductController::class, "index"])->name('ProductList');
    Route::get("Products/{name}", [ProductController::class, "show"])->name('Product');
});
//carrito
Route::group(['middleware'=>'role:client,admin'], function () {
    Route::get("ShopCard", [ShopCardController::class, "index"])->name('ShopCardList');
    Route::post("ShopCard", [ShopCardController::class, "store"])->name('ShopCardAdd');
    Route::put("ShopCard", [ShopCardController::class, "update"])->name('ShopCardUpdate');
    Route::delete("ShopCard", [ShopCardController::class, "destroy"])->name('ShopCardDelete');
});
//Crud usuario aqui es necesario el resource
Route::group(['middleware'=>'role:admin'], function () {
    Route::resource("Users", UserController::class);
});
Route::group(['middleware'=>'role:client,admin'], function () {
    Route::get("ConfirmOrder", [OrderController::class, "store"])->name('ConfirmOrder');
});
