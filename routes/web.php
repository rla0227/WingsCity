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

Route::get('/', 'PagesController@index'); //goes to PagesController.php and calls index function which returns index.blade.php
Route::get('/menu', 'PagesController@menu'); 
Route::get('/about', 'PagesController@about');

Route::get('/flavors', 'MenuController@flavors');

Route::get('/appetizer', 'MenuController@appetizer');
Route::get('/salads', 'MenuController@salads');
Route::get('/specialties', 'MenuController@specialties');

Route::get('/sides', 'MenuController@sides');
Route::get('/dips', 'MenuController@dips');
Route::get('/kids', 'MenuController@kids');

Route::get('/wings', 'MenuController@wings');
Route::get('/combo', 'MenuController@combo');
Route::get('/wingsPack', 'MenuController@wingsPack');

Route::get('/specialtyDrinks', 'MenuController@specialtyDrinks');
Route::get('/beverages', 'MenuController@beverages');
Route::get('/beer', 'MenuController@beer');