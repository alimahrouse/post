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




Route::get('/dashbord', 'dashbordController@index')->name('dashbord');

Route::get('/about', 'pagecontroler@abouta');
Route::get('/home', 'pagecontroler@home');
Route::get('/resource', 'pagecontroler@resource');

Route::get('/', 'pagecontroler@root');

Route::get('/posts','postscontroller@index')->name('posts.index');

Auth::routes();

//post create
Route::get('/posts/create','postscontroller@create')->name('posts.create');
Route::post('/posts','postscontroller@store')->name('posts.store');
//post rout

Route::get('/posts/{id}','postscontroller@show')->name('posts.show');
Route::get('/posts/{id}/edite','postscontroller@edite')->name('posts.edite');
Route::PUT('/posts/{id}','postscontroller@update')->name('posts.update');
Route::delete('/posts/{id}','postscontroller@destroy')->name('posts.destroy');



