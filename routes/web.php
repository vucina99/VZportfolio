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


Route::get('/', 'PortfolioController@index');
Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/download', 'PortfolioController@download');
Route::post('/mail', 'PortfolioController@mail');
Route::post('/new', 'PortfolioController@new');
Route::delete('/deletemail/{user}', 'PortfolioController@deletemail');
Route::post('/comment', 'HomeController@comment');
Route::delete('/deletecomment/{id}', 'HomeController@deletecomment');
Route::get('/updatecomment/{id}', 'HomeController@updatecomment');
Route::patch('/insert/{id}', 'HomeController@insert');

Route::get('/admin-dash', 'AdminController@index')->middleware('admin');
Route::get('/allcoments', 'AdminController@comm')->middleware('admin');
Route::delete('/deletecommentadmin/{id}', 'AdminController@delete')->middleware('admin');
Route::post('/upload', 'AdminController@upload')->middleware('admin');
Route::post('/dodaj', 'AdminController@dodaj')->middleware('admin');

