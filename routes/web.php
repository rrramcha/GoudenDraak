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

Route::prefix('admin')->name('admin.')->group(
    function () {
        Route::get('', 'AdminController@index')->name('overview');
        Route::get('/dishes', 'AdminController@dishOverview')->name('dish.overview');
        Route::get('/dishes/create', 'AdminController@createDish')->name('dish.create');
        Route::post('dishes/create/save', 'AdminController@storeDish')->name('dish.store');
        Route::get('/dishes/edit/{menuItem}', 'AdminController@editDish')->name('dish.edit');
        Route::post('/dishes/edit/update/{menuItem}', 'AdminController@updateDish')->name('dish.update');
        Route::delete('/dishes/delete/{menuItem}', 'AdminController@deleteDish')->name('dish.delete');
    }
);
