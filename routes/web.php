<?php

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

Route::get('/', 'frontController@homehome');
Route::get('/index.html', 'frontcontroller@homehome');
Route::get('/shop.html', 'frontcontroller@shop');
Route::get('/team.html', 'frontcontroller@team');
Route::get('/single.html', 'frontcontroller@single');
Route::get('/login.html', 'frontcontroller@login');
Route::get('contact.html', 'frontController@contact');
Route::get('/experiance.html', 'frontcontroller@events');
Route::get('/register.html', 'frontcontroller@registrati');




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group([ 'prefix' => 'admin','middleware'=>'auth'], function() {
  Route::get('/', function() {
    return view('admin.index');
  })->name('admin.index');

  Route::resource('product', 'ProductsController');
  Route::resource('category', 'CategoriesController');
  Route::resource('event', 'EventsController');
});
