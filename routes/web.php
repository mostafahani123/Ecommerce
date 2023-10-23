<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\DetailsController;
use   App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

Route::get("/", [HomeController::class , "home"])->name("home");
Route::get("/users", [UserController::class , "user"]);
Route::get("/create/product" , [ProductController::class , "create"]);

Route::get("/register", [RegisterController::class , "register"]);
Route::post("/register", [RegisterController::class , "handle_register"]);

Route::get("/login", [LoginController::class , "login"]);
Route::post("/login", [LoginController::class , "handle_login"]);

Route::prefix("/product")->group(function(){
    Route::post("/store" , [ProductController::class , "store"]);
    Route::get("/delete/{id}" , [ProductController::class , "delete"]);
    Route::get("/deletee/{id}" , [UserController::class , "deletee"]);
});


Route::get("edit/product/{id}" , [ProductController::class , "edit"]);
Route::get("/details/{id}" , [ProductController::class , "details"]);
Route::get("/detailuser/{id}" , [DetailsController::class , "detailsuser"]);
