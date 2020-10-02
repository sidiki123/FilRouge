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


Route::get('/', function () {
    return view('djoz/index');
})->name('accueil');

Route::get('/a-propos', function () {
    return view('djoz/about');
})->name('about');

Route::get('/events', function () {
    return view('djoz/discography');
})->name('discography');

Route::get('/a-la-une', function () {
    return view('djoz/tours');
})->name('tours');

Route::get('/videos', function () {
    return view('djoz/videos');
})->name('videos');


Route::get('/', 'AdminController@accueil')->name('accueil');

Route::get('/blank-page', 'AdminController@blank_page')->name('blank-page');
Route::get('/page-login', 'AdminController@page_login')->name('page-login');
Route::get('/page-register', 'AdminController@page_register')->name('page-register');
Route::get('/dashboard', 'AdminController@dashboard')->middleware('can:access')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/register_agence', 'AdminController@register_agence')->name('register_agence');
Route::post('/register_agence_store', 'AdminController@register_agence_store')->name('register_agence_store');
Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');
// Route::get('/confirm/{id}/{token}', 'Auth\AdminController@confirm');

// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
// Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');