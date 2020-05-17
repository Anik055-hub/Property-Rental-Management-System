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
    return view('website.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', ['middleware' => 'auth','as'=> 'profile','uses' => 'UserController@profile']);
Route::get('/editProfile/{id}', ['as'=>'editProfile','uses'=>'UserController@edit']);
Route::post('/editProfile/{id}', 'UserController@update');


Route::get('/customer', 'customerController@index')->name('customer');
Route::post('/customer', 'customerController@search');
Route::get('/feedback', 'customerController@feedback')->name('feedback');
Route::get('/featuredPost', 'customerController@featuredPost')->name('featuredPost');
Route::get('/allCustomer', 'customerController@list')->name('allCustomer');
Route::get('/deleteCustomer/{id}', 'customerController@delete')->name('deleteCustomer');
Route::post('/deleteCustomer/{id}', 'customerController@destroy')->name('destroy');

Route::get('/property', 'propertyController@index')->name('property');
Route::post('/property', 'propertyController@search');
Route::get('/activeProperty', 'propertyController@activeProperty')->name('activeProperty');
Route::get('/rentProperty', 'propertyController@rentProperty')->name('rentProperty');
Route::get('/mostVisitedProperty', 'propertyController@mostVisitedProperty')->name('mostVisitedProperty');
Route::get('/allProperty', 'propertyController@list')->name('allProperty');
Route::get('/edit/{id}', ['as'=>'edit','uses'=>'propertyController@edit']);
Route::post('/edit/{id}', 'propertyController@update');
Route::get('/delete/{id}', 'propertyController@delete')->name('delete');
Route::post('/delete/{id}', 'propertyController@destroy')->name('destroy');

Route::get('/message', 'messageController@index')->name('message');
Route::get('/messageC', 'messageController@messageC')->name('messageC');
Route::get('/allMessage', 'messageController@list')->name('allMessage');
Route::get('/updateMessage', 'messageController@update')->name('updateMessage');
Route::get('/editMessage/{id}', ['as'=>'editMessage','uses'=>'messageController@edit']);
Route::post('/editMessage/{id}', 'messageController@create');
Route::get('/deleteMessage/{id}', 'messageController@delete')->name('deleteMessage');
Route::post('/deleteMessage/{id}', 'messageController@destroy')->name('destroy');


