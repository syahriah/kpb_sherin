<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'indexPost']);

Route::get('/admin', [HomeController::class, 'index1']);

Route::get('/detail/{instanceId}', [HomeController::class, 'index2']);
Route::post('/validasi', [HomeController::class, 'index3']);
