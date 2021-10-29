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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function(){
    Route::get('{provider}', 'Auth\OAuthController@redirectToProvider')->name('provider');
    Route::get('{provider}/callback', 'Auth\OAuthController@handleProviderCallback')->name('provider.callback');
});
