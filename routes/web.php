<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StokController;
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

Route::get('category',[CategoryController::class,'index']);
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category',[CategoryController::class,'store'])->name('category.store');
Route::get('category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/{id}',[CategoryController::class,'update'])->name('category.update');
Route::Delete('category/{id}',[CategoryController::class,'destroy'])->name('category.destroy');







Route::get('stok',[StokController::class,'index']);
Route::get('stok/create',[StokController::class,'create'])->name('stok.create');
Route::post('stok',[StokController::class,'store'])->name('stok.store');
Route::get('stok/{id}/edit',[StokController::class,'edit'])->name('stok.edit');
Route::put('stok/{id}',[StokController::class,'update'])->name('stok.update');
Route::delete('stok/{id}',[StokController::class,'delete'])->name('stok.delete');



Route::get('item',[ItemController::class,'index']);
Route::get('item/create',[ItemController::class,'create'])->name('item.create');
Route::post('item',[ItemController::class,'store'])->name('item.store');
Route::get('item/{id}/edit',[ItemController::class,'edit']);
Route::put('item/{id}',[ItemController::class,'update']);
Route::delete('item/{id}',[ItemController::class,'delete']);