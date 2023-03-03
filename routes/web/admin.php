<?php

Route::get('/test',function()
{
    return 'aasdasdd';
});

Route::resource('user','UserController');

Route::get('/panel','PanelController@index');
