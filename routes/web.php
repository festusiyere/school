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

Route::view('/', 'public.home');

// Route::view('createPublicPost', 'public.create');

/* Public Post Route*/
Route::resource('blog', 'publicPostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/editorial', 'StaffPostController@index');
    Route::resource('profile', 'UserProfileController');
    // Route::get('/profile', 'UserProfileController@index');
    Route::get('/settings', 'UserProfileController@index');
});
