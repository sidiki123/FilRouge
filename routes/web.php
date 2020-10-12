<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tableau_de_bord\AdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategorieController;
use App\Categorie;

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


Route::get('/', [PageController::class, 'accueil'])->name('accueil');
Route::get('a-propos', [PageController::class, 'about'])->name('about');
Route::get('events', [PageController::class, 'discography'])->name('discography');
Route::get('a-la-une', [PageController::class, 'tours'])->name('tours');
Route::get('videos', [PageController::class, 'videos'])->name('videos');

// Route::get('/', function () {
//     return view('djoz/index');
// })->name('accueil');

// Route::get('/a-propos', function () {
//     return view('djoz/about');
// })->name('about');

// Route::get('/events', function () {
//     return view('djoz/discography');
// })->name('discography');

// Route::get('/a-la-une', function () {
//     return view('djoz/tours');
// })->name('tours');

// Route::get('/videos', function () {
//     return view('djoz/videos');
// })->name('videos');
Route::get('page-login', [PermissionController::class, 'page-login'])->name('page-login');
Route::get('page-register',[  PermissionController::class, 'page-register'])->name('page-register');
Route::get('register_agence',[  PermissionController::class, 'register_agence'])->name('register_agence');
Route::post('/register_agence_store',[PermissionController::class, 'register_agence_store'])->name('register_agence_store');
Route::post('/store_categ', [CategorieController::class, 'store'])->name('store_categ');
Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');
Route::namespace('Tableau_de_bord')->middleware('can:access')->group(function () {
  
Route::get('/Tableau_de_bord', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('Tableau_de_bord/blank-page', [AdminController::class, 'blank_page'])->name('blank_page');
Route::get('Tableau_de_bord/bootstrap_components', [AdminController::class, 'bootstrap_components'])->name('bootstrap_components');
Route::get('Tableau_de_bord/charts', [AdminController::class, 'charts'])->name('charts');
Route::get('Tableau_de_bord/docs', [AdminController::class, 'docs'])->name('docs');
Route::get('Tableau_de_bord/form_components', [AdminController::class, 'form_components'])->name('form_components');
Route::get('Tableau_de_bord/form_custom', [AdminController::class, 'form_custom'])->name('form_custom');
Route::get('Tableau_de_bord/form_notifications',[AdminController::class, 'form_notifications'])->name('form_notifications');
Route::get('Tableau_de_bord/form_sample', [AdminController::class, 'form_sample'])->name('form_sample');
Route::get('Tableau_de_bord/form_agence', [AdminController::class, 'form_agence'])->name('form_agence');


Route::post('', [AdminController::class, 'store_event'])->name('store_event');
Route::get('Tableau_de_bord/page_calendar', [AdminController::class, 'page_calendar'])->name('page_calendar');
Route::get('Tableau_de_bord/page_error',[AdminController::class, 'page_error'])->name('page_error');
Route::get('Tableau_de_bord/page_invoice', [AdminController::class, 'page_invoice'])->name('page_invoice');
Route::get('Tableau_de_bord/page_lockscreen', [AdminController::class, 'page_lockscreen'])->name('page_lockscreen');
Route::get('Tableau_de_bord/page_mailbox', [AdminController::class, 'page_mailbox'])->name('page_mailbox');
Route::get('Tableau_de_bord/page_user', [AdminController::class, 'page_user'])->name('page_user');
Route::get('Tableau_de_bord/table_basic', [AdminController::class, 'table_basic'])->name('table_basic');
Route::get('Tableau_de_bord/table_data_table', [AdminController::class, 'table_data_table'])->name('table_data_table');
Route::get('Tableau_de_bord/table_data_table_agence', [AdminController::class, 'table_data_table_agence'])->name('table_data_table_agence');
Route::get('Tableau_de_bord/widgets', [AdminController::class, 'widgets'])->name('widgets');
Route::get('Tableau_de_bord/ui_cards', [AdminController::class, 'ui_cards'])->name('ui_cards');
});


