<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/{id}',     'PostController@category') ->name('category');
Route::post('/posts/store',      'PostController@store')    ->name('store.posts');
