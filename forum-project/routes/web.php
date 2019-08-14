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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

//Rotas para threads
Route::get('threads', 'ThreadController@index');
Route::get('threads/create', 'ThreadController@create');
Route::get('threads/{theme}/{thread}', 'ThreadController@show');
Route::patch('threads/{theme}/{thread}', 'ThreadController@update');
Route::delete('threads/{theme}/{thread}', 'ThreadController@destroy');
Route::post('threads', 'ThreadController@store');
Route::get('threads/{theme}', 'ThreadController@index');
//Rotas para replies
Route::post('/threads/{theme}/{thread}/replies', 'ReplyController@store');
Route::delete('/threads/{theme}/{thread}/replies','ReplyConroller@delete');
//Rotas para profile
Route::get('/profiles/{user}', 'ProfilesController@show')->name('profile');

Auth::routes();



