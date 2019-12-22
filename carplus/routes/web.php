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
Route::get('/about', 'MainController@about');
Route::get('/contactus', 'MainController@contactus');
Route::get('/index', 'MainController@index');
Route::get('/', 'MainController@index');
Route::get('/layout', 'MainController@layout');
Route::get('/location', 'MainController@location');
Route::get('/sell', 'MainController@sell');
Route::get('/services', 'MainController@services');
Route::get('/try', 'MainController@try');
Route::get('/login', 'MainController@login_view');

Route::get('/signup', 'MainController@signup');




Route::get('/admin', 'MainController@Admin');
Route::get('/addcar', 'MainController@AddCar');
Route::get('/updatecar', 'MainController@UpdateCar');
Route::get('/adminpanel', 'MainController@AdminPanel');




Route::post('/submit', 'MainController@login');
Route::post('/signupRister', 'MainController@signupRister');
Route::post('/addsubmit', 'MainController@AddSubmit');
Route::get('/updatesubmit', 'MainController@UpdateSubmit');
/*
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});




 Route::get('/', function () {
    return view('index');
});

 Route::get('/layout', function () {
    return view('layout');
});
 Route::get('/location', function () {
    return view('location');
});

  Route::get('/sell', function () {
    return view('sell');
});

   Route::get('/service', function () {
    return view('service');
});

    Route::get('/try', function () {
    return view('try');
});
*/