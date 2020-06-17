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

Route::get('/', 'MainController@index')->name('home');
Route::get('/menu', 'MainController@showMenu')->name('menu');
Route::get('/menu/download', 'MainController@downloadMenu')->name('menu.download');
Route::get('/contact', 'MainController@showContact')->name('contact');
Route::get('/news', 'MainController@showNews')->name('news');
Route::get('/getmenuitems', 'MainController@getJSONMenu')->name('getmenuitems');
Route::get('/getsalesdata', 'MainController@getSalesData')->name('getsalesdata');
Route::get('/gettransactions', 'MainController@getJSONTransactions')->name('gettransactions');


Route::prefix('kassa')->name('register.')->group(
    function () {
        Route::get('', 'RegisterController@index')->name('overview')->middleware('auth');
        Route::get('/sales', 'RegisterController@showSales')->name('sales')->middleware('auth');
    }
);
Route::post('/sendorder', 'MainController@sendOrder')->name('sendorder');
Route::post('/repeatorder', 'MainController@repeatOrder')->name('repeatorder');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(
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

Auth::routes();

