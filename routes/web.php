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

use App\Http\Controllers\CategoryController;
Route::group(["prefix" => "latihan"], function(){
Route::get("/kategori/all", [CategoryController::class, "index"]);
Route::get("/kategori/search", [CategoryController::class,
"search"]);
Route::get("/kategori/{id}/delete", [CategoryController::class,
"delete"]);
Route::get("/kategori/{id}/restore", [CategoryController::class,
"restore"]);
Route::get("/kategori/{id}/permanent-delete",
[CategoryController::class, "permanentDelete"]);
});
?>