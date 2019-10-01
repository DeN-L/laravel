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

Route::get('/about', function () {
    return view('about', [
        'title' => 'Ebaut',
        'text' => 'Ebaut Us'
    ]);
});

Route::get('blade', function () {
    return view('child');
});

Route::get('/blog', 'ArticleController@index')->name('articles');

Route::get('/blog/{id}', 'ArticleController@show');