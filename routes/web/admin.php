<?php

Route::get('/test',function()
{
    return 'aasdasdd';
});

Route::resource('user','UserController');

Route::get('/news/special','NewsController@specialNews')->name('newsSpecial');
Route::post('/news/special/{news}','NewsController@specialNews_store')->name('newsSpecial-store');
Route::resource('news','NewsController');

Route::get('/panel','PanelController@index');
