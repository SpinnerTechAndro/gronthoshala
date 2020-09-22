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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin
Route::get('admin/home', 'AdminController@index');
/*Route::get('admin/dashboard','AdminController@index');*/
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('login.admin');
Route::post('admin','Admin\LoginController@login');

//Admin Panel
//books
Route::get('adminview/books/index', 'BookController@index')->name('books.index');