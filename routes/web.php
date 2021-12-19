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
    return view('welcome');
});

/*if use the above, the HomeController is skipped */

//Route::get('/', 'HomeController@index');


Route::get('/profile', 'ProfileController@index');
Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store')->name('profile.store');
Route::get('/profile/edit', 'ProfileController@edit');
Route::post('/profile/{id}/update', 'ProfileController@update')->name('profile.update');

Route::get('/post/create', 'PostController@create');
Route::get('/post/ad_delete', 'PostController@chooseDestroy');
Route::post('/post/ad_destroy', 'PostController@destroy')->name('post.destroy');
Route::post('/post', 'Postcontroller@store')->name('post.store');
Route::get('/post/{postID}', 'Postcontroller@show');

Route::get('/reviews/r_index', 'ReviewsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
