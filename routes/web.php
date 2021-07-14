<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;

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

Route::group(["prefix" => "admin"], function () {
    Route::get("/", [AppController::class, "index"]);
    Route::group(["prefix" => "/orders"], function () {
        Route::get("/", [CategoryController::class, "index"]);
    });
    Route::group(["prefix" => "/products"], function () {
        Route::get("/", [CategoryController::class, "index"]);
    });
    Route::group(["prefix" => "/customers"], function () {
        Route::get("/", [CategoryController::class, "index"]);
    });
    Route::group(["prefix" => "/categories"], function () {
        Route::get("/", [CategoryController::class, "index"]);
    });
    Route::group(["prefix" => "/tags"], function () {
        Route::get("/", [CategoryController::class, "index"]);
    });
    Route::get("/analytics", [AppController::class, "analytics"]);
});
