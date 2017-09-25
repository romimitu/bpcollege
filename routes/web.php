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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/* Ad-min Panel Routes */

Route::resource('notice','NoticeController');
Route::resource('blog','BlogController');
Route::resource('gallery','GalleryController');
Route::resource('page','PageController');
Route::resource('department','DepartmentController');
Route::resource('member','TeamController');
Route::get('message','AdminController@ContactMessage');
Route::get('aboutcollege/{id}/edit','AdminController@ViewAboutPage');
Route::get('aboutcollege/{id}','AdminController@EditAboutPage');


/* Public Routes */

Route::get('/overview', function () {
    return view('public.about');
});
Route::get('/facts-acts', function () {
    return view('public.facts-acts');
});
Route::get('/mission', function () {
    return view('public.mission');
});
Route::get('/notice-board', 'PublicController@allNotice');
Route::get('/notice-board/{id}/{slug}', 'PublicController@SingleNotice');

Route::get('/photo-gallery', 'PublicController@PhotoGallery');

Route::get('/news-events', 'PublicController@allNews');
Route::get('/news-events/{id}/{slug}', 'PublicController@newsDetails');
Route::get('/staff', 'PublicController@TeamMember');
Route::get('/location', function () {
    return view('public.location');
});
Route::get('/contact', function () {
    return view('public.contact-us');
});