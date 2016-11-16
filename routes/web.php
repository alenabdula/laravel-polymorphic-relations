<?php

// Home Page
Route::get('/', 'PageController@home')->name('home');

// Article Resource
Route::resource('article', 'ArticleController');

// Save Comment
Route::post('article/{id}/comment', 'ArticleController@comment')->name('article.comment.store');