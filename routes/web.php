<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('kategori/{kategori}', 'HomeController@kategori')->name('landing.kategori');
Route::get('kategori/{kategori}/detail/{slug}', 'HomeController@detail')->name('landing.detail');

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function(){
    Route::get('{provider}', 'Auth\OAuthController@redirectToProvider')->name('provider');
    Route::get('{provider}/callback', 'Auth\OAuthController@handleProviderCallback')->name('provider.callback');
});

Route::get('dev', function () {
    return view('dashboard.content.primary.detail');
});

Route::get('dev2', function () {
    return view('dashboard.content.users.index');
});

Route::group(['prefix' => 'home',  'middleware' => ['auth'], 'as' => 'dashboard.'], function(){
    Route::get('/', 'Dashboard\HomeController@index')->name('index');

    Route::group(['middleware' => ['role:admin']], function(){
        Route::resource('user', 'Dashboard\UserController');
    });

    Route::resource('kategori', 'Dashboard\KategoriController');

    Route::resource('artikel', 'Dashboard\ArtikelController');
});
