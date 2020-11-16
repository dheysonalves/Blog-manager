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

// Route::get('/', function () {
//     // View is a helper function from the laravel api
//     return view('home');
//     // Everything can be rendered here, for example:
//     // return 'Something';
// });

Route::get('/', 'HomeController@home')->name('home')->middleware('auth');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::resource('/posts', 'PostController');

Auth::routes();
