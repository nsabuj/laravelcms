<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/add_article', function () {
    return view('add-article');
});


Route::get('/edit_article/{id}',
    'ArticleController@edit_article');

Route::get('/edit_article', 'ArticleController@edit_article');

Route::get('/articles', 'ArticleController@show_articles');

Route::get('/edit_articles', 'ArticleController@edit_articles');

Route::post('article/add_article', 'ArticleController@add_article');

Route::post('auth/register', 'CustomAuthController@CustomPostRegister');

Route::get('/delete_article','ArticleController@delete_article');

Route::post('/update_article', 'ArticleController@update');

Route::post('/delete_article', 'ArticleController@delete');

Route::get('/article/{id}','ArticleController@single_article');
Route::get('/article','ArticleController@single_article');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'CustomAuthController@logout');


