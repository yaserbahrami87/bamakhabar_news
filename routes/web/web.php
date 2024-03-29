<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/repair_shortlink','NewsController@repair_shortlink');
Route::get('/test_link','NewsController@test_link');
Route::get('/news/store_auto','SourceController@store_auto');

Route::get('/search','NewsController@search');
Route::resource('news','NewsController');
Route::get('/test',function()
{
    return view('admin.index');
});


Route::resource('newsagency','NewsagencyController');
Route::resource('category','CategoryController');


