<?php

use App\Http\Controllers\TanyaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\tanyaController@index');
Route::group(['middleware' => ['auth']], function () {

    Route::resource('kategori', 'App\Http\Controllers\KategoriController');
    Route::resource('profile', 'App\Http\Controllers\ProfileController')->only(['index', 'update']);
    Route::resource('jawab', 'App\Http\Controllers\JawabController');
});
Route::resource('tanya', 'App\Http\Controllers\TanyaController');
// Auth::routes();
