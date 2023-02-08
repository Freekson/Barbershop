<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
Route::get('/Galery', function () {
    return view('galery');
});
Route::get('/Catalog', function () {
    return view('catalog');
});
Route::get('/ordering', function () {
    return view('ordering');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('home', [OrderController::class, 'allData']);
Route::get('ordering', [OrderController::class, 'index']);
Route::post('store-form', [OrderController::class, 'store']);