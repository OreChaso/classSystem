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
//新規作成画面
Route::get('/create', [homeController::class, 'createShow'])->name('createShow');
//新規ユーザー登録
Route::post('/',[homeController::class, 'userCreate'])->name('userCreate');
//ログイン処理
Route::post('/login', [homeController::class, 'login'])->name('login');
//ホーム画面に飛ぶ
Route::get('admin.home', [homeController::class, 'roomNumber'])->name('home');
//各教室画面に飛ぶ
Route::get('admin/rooms/501', function() {
    return view('admin/rooms/501');
})->name('501');
Route::get('admin/rooms/502', function() {
    return view('admin/rooms/502');
})->name('502');
Route::get('admin/rooms/503', function() {
    return view('admin/rooms/503');
})->name('503');
Route::get('admin/rooms/504', function() {
    return view('admin/rooms/504');
})->name('504');
//ログアウト
Route::get('logout', [homeController::class, 'logout'])->name('logout');






