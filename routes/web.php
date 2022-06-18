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

Route::middleware(['admin'])->group(function () {
  Route::get('/', [HomeController::class, 'home']);
  Route::post('/', [HomeController::class, 'startInstance']);
  Route::post('/update-data', [HomeController::class, 'updateData']);

  Route::get('/admin', [HomeController::class, 'admin']);
  Route::get('/detail/{instanceId}', [HomeController::class, 'detailInstance']);
  Route::post('/setujui', [HomeController::class, 'setujui']);
  Route::post('/validasi', [HomeController::class, 'validasi']);
});

Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'loginPost']);

Route::get('/logout', [HomeController::class, 'logout']);
