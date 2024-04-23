<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/list-menu/get-all-data', 'App\Http\Controllers\MenuController@getAllData');
Route::get('/list-menu', [App\Http\Controllers\MenuController::class, 'Menu']);
Route::get('list-menu/{nama}/{harga}', [App\Http\Controllers\MenuController::class, 'MemilihMenu']);

