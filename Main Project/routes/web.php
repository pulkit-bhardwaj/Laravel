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

Route::get('/', function () {
    return view('home');
});
Route::get('/characters', [\App\Http\Controllers\ShowsController::class,'index']);
Route::get('/detail/{id}', [\App\Http\Controllers\ShowsController::class,'detail']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);

Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create']);
Route::post('/admin/shows', [App\Http\Controllers\AdminController::class, 'store']);
Route::get('/admin/shows/edit/{show}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
Route::put('/admin/shows/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
Route::delete('/admin/shows/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);
Route::get('/search/{id}', [App\Http\Controllers\AdminController::class, 'search']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
