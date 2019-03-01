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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'PagesController');
// Route::get('/index', 'PagesController@index');
// Route::get('/index/create', 'PagesController@create');
// Route::get('/index/{project}', 'PagesController@show');
// Route::get('/index/{project}/edit', 'PagesController@edit');
// Route::post('/index', 'PagesController@store');
// Route::patch('/index/{project}', 'PagesController@update');
// Route::delete('/index/{project}', 'PagesController@destroy');
?>

