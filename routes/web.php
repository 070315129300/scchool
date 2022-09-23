<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
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
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/primary', [HomeController::class, 'primary']);
Route::get('/secondary', [HomeController::class, 'secondary']);
Route::get('/admission', [HomeController::class, 'admission']);
Route::get('/blog', [HomeController::class, 'blog']);
