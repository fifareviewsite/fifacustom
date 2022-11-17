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
    return view('/page/index'); // この行を編集
});

Route::get('/mypage', function () {
    return view('/page/mypage'); // この行を編集
});

Route::get('/register', function () {
    return view('/page/register'); // この行を編集
});

// この行を追加
Route::get('/home', 'HomeController@index')->name('home');