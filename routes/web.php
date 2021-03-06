<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["prefix" => "admin", "middleware" => ["auth", "admin"]], function () {
    Route::get("/", [AppController::class, "index"]);

    Route::group(["prefix" => "/orders"], function () {
        Route::get("/", [OrderController::class, "index"]);
    });

    Route::group(["prefix" => "/products"], function () {
        Route::get("/", [ProductController::class, "index"]);
        Route::get("/new", [ProductController::class, "create"]);
        Route::post("/store", [ProductController::class, "store"]);
    });

    Route::group(["prefix" => "/customers"], function () {
        Route::get("/", [CustomerController::class, "index"]);
    });

    Route::group(["prefix" => "/categories"], function () {
        Route::get("/", [CategoryController::class, "index"]);
        Route::get("/new", [CategoryController::class, "create"]);
        Route::post("/store", [CategoryController::class, "store"]);
    });

    Route::group(["prefix" => "/tags"], function () {
        Route::get("/", [TagController::class, "index"]);
        Route::get("/new", [TagController::class, "create"]);
        Route::post("/store", [TagController::class, "store"]);
    });

    Route::get("/analytics", [AppController::class, "analytics"]);
});
