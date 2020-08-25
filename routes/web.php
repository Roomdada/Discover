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



Route::get('/','HomeController@index')->name('home.path');
Route::get('/about','HomeController@about')->name('about.path');
Route::get('/contact','HomeController@contact')->name('contact.path');
Route::post('/contact/send','HomeController@storeContact')->name('store.contact.path');

Route::get('/event','HomeController@event')->name('event.path');
Route::get('/gallery','HomeController@gallery')->name('gallery.path');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
