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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('djoz/index');
})->name('home');

Route::get('/about', function () {
    return view('djoz/about');
})->name('about');

Route::get('/discography', function () {
    return view('djoz/discography');
})->name('discography');

Route::get('/tours', function () {
    return view('djoz/tours');
})->name('tours');

Route::get('/videos', function () {
    return view('djoz/videos');
})->name('videos');

Route::get('dashboard', function() {
    return view('Admin/vali-admin-master/docs/dashboard');
});

Route::get('/blank-page', 'AdminController@blank_page')->name('blank-page');
Route::get('/page-login', 'AdminController@page_login')->name('page-login');
Route::get('/page-register', 'AdminController@page_register')->name('page-register');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/register_agence', 'AdminController@register_agence')->name('register_agence');
Route::post('/register_agence_store', 'AdminController@register_agence_store')->name('register_agence_store');
Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');