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

// Routes for backend.
Route::get('/admin/blog', 'ArticleBackend@index');
Route::get('/admin/blog/{id}', 'ArticleBackend@show');
Route::get('/admin/blog/create', 'ArticleBackend@create')->name('article_create');
Route::get('/admin/blog/edit/{id}', 'ArticleBackend@update')->name('article_edit');
Route::get('/admin/blog/delete/{id}', 'ArticleBackend@destroy')->name('article_delete');
Route::post('/admin/blog/store', 'ArticleBackend@store');

// API Routs.
Route::get('/api/blog', 'ApiController@getAll');
Route::get('/api/blog/{id}', 'ApiController@getArticle');

// Categories.
Route::get('/admin/category', 'CategoryController@index');