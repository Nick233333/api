<?php

Route::post('images/upload', 'ImageController@upload');
Route::delete('images/{file_name}', 'ImageController@destroy');

Route::get('books/{id}', 'BookController@show');
Route::get('categorys/index', 'CategoryController@index');

