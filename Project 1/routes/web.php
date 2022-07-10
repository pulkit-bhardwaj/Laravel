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

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('blog', [App\Http\Controllers\PagesController::class, 'blog']);
Route::get('contact', [App\Http\Controllers\PagesController::class, 'contact']);
Route::get('edit', [App\Http\Controllers\PagesController::class, 'edit']);
