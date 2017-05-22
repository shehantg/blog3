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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//BLOGSCONTROLLER

Route::resource('blogs', 'BlogsController');




//TAGCONTROLLER

Route::resource('tags', 'TagController');

Route::get('Paragraphs/{id}/create','ParagraphController@create');
Route::post('Paragraphs/{id}/create','ParagraphController@store');

