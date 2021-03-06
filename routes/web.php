<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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
//     return view('welcome');
// });
Route::get('/', [DataController::class, 'index_list'])->name('indexlist');
Route::post('store', [DataController::class, 'store'])->name('store');

// Route::post('store', [DataController::class, 'store'])->name('store');
// Route::get('index', [DataController::class, 'index'])->name('index');
// Route::get('indexlist', [DataController::class, 'index_list'])->name('indexlist');
// Route::post('store_data', [DataController::class, 'store_data'])->name('store_data');

