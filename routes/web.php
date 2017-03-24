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

Route::get('/home', 'HomeController@index');


/* Ad-min Panel Routes */

Route::resource('notice','NoticeController');
Route::resource('media','MediaController');
Route::resource('gallery','GalleryController');
Route::resource('page','PageController');
Route::resource('department','DepartmentController');
Route::resource('member','TeamController');
Route::get('message','AdminController@ContactMessage');
