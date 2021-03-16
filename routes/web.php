<?php

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id}',     'PostController@category') ->name('category');
Route::post('/posts/store',      'PostController@store')    ->name('store.posts');


Route::get('/about', 'PagesController@about')->name('about');

Route::get('/image/',         'ImageController@index') ->name('index');
Route::get('/image/add',      'ImageController@create')->name('create');
Route::post('/image/store',   'ImageController@store') ->name('store');