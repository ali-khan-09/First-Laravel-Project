<?php

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

// Route::get('/', function () {
//     return ["foo"=>"Bar"];
// });

   Route::get("/welcome/{data}",[\App\Http\Controllers\PostsController::class,"index"]);
   Route::get("/",[\App\Http\Controllers\PostsController::class,"show"]);
   Route::get("/about",[\App\Http\Controllers\PostsController::class,"about"]);
   Route::get("/article/create",[\App\Http\Controllers\ArticleController::class,"create"]);
   Route::get("/article/{article}",[\App\Http\Controllers\ArticleController::class,"show"])->name("article.show");
   Route::get("/article",[\App\Http\Controllers\ArticleController::class,"index"]);
   Route::post("/article",[\App\Http\Controllers\ArticleController::class,"store"])->name("article.store");
   Route::get("/article/{article}/edit",[\App\Http\Controllers\ArticleController::class,"edit"])->name("article.edit");
   Route::put("/article/{article}/edit",[\App\Http\Controllers\ArticleController::class,"update"])->name("article.update");
