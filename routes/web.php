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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/menu', 'HomeController@showMenu')->name('menu');
Route::get('/contact', 'HomeController@showContact')->name('contact');
Route::get('/news', 'HomeController@showNews')->name('news');
Route::get ( '/vueitems', 'RegisterController@readItems' );

Route::prefix('kassa')->name('register')->group(
    function () {
        Route::get('', 'RegisterController@index')->name('overview');
        Route::get('/login', 'RegisterController@login')->name('');
    }
);
