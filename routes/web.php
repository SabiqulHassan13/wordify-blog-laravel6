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

// Route::get('/', function () {
//     return view('welcome');
// });

// ===================== Front End Routes Start Here =====================
Route::group(['namespace' => 'Site'], function() {
    Route::get('/', 'SiteController@homePage')->name('home');
    Route::get('/contact', 'SiteController@contactPage')->name('contact');
    
    Route::get('/category-posts', 'SiteController@categoryWisePostPage')->name('category.posts');
    Route::get('/single-post', 'SiteController@singlePostPage')->name('single.post');

});


// ===================== Front End Routes End Here =====================

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
