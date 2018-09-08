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



//'middleware'=>'auth' - авторизация

//Route::get("env", function (){
//
//    echo "<pre>";
//    print_r($_ENV);
//    echo "</pre>";
//});

//Route::resource('/pages', 'AdminCoreResource');

// ->middleware('mymiddle' )
/*'middleware=>'mymiddle:home'*/


Route::get('/', ['as' => 'home', 'uses'=>'Admin\IndexController@show']);

Route::get('/about', ['as' => 'about', 'uses'=>'Admin\AboutController@show']);

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);

Route::get('/article/{id}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article']);

Route::match(['get','post'],'/contact/{id?}', ['uses'=>'Admin\ContactController@show', 'as'=>'contact']);


