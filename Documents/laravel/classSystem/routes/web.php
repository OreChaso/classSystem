<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

//ログインページに飛ぶ
Route::get('/', [homeController::class, 'loginShow'])->name('loginShow');
Route::post('/login', [homeController::class, 'login'])->name('login');
Route::get('/home', [homeController::class, 'home'])->name('home');



