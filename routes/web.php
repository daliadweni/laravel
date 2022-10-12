<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;


/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

//Route::get('/', function () {
//return view('home');

Route::get('/', 'App\Http\Controllers\Frontend\FrontendController@index');
Route::get('category', [FrontendController::class , 'category']);
Route::get('view-category/{slug}', [FrontendController::class , 'viewcategory']);
Route::get('category/{slug}/{prod_slug}', [FrontendController::class , 'productview']);
Auth::routes();
Route::post('add-cart', [CartController::class , 'addProducts']);


Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class , 'viewcart']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');

    Route::get('edit-prod/{id}', [CategoryController::class , 'edit']);
    Route::put('update-category/{id}', [CategoryController::class , 'update']);
    Route::delete('delete-category/{id}', [CategoryController::class , 'destroy']);


    Route::get('products', [ProductController::class , 'index']);
    Route::get('add-products', [ProductController::class , 'add']);
    Route::post('insert-product', [ProductController::class , 'insert']);
    Route::delete('delete-product/{id}', [ProductController::class , 'destroy']);



});
