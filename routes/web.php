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

Route::get('/contact', ['uses'=>'Admin\ContactController@show', 'as'=>'contact'])
->middleware('auth');

Route::post('/contact', ['uses'=>'Admin\ContactController@store']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::group(['prefix'=>'admin', 'middleware'=>['web','auth']], function(){

    Route::get('/',['uses'=>'Admin\AdminController@show', 'as'=>'admin_index']);
    Route::get('/add/post',['uses'=>'Admin\AdminPostController@create', 'as'=>'admin_add_post']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/login','Auth\MyAuthController@showLogin');


//login
Route::group(['middleware'=>['web']], function(){

    Route::get('/login',['uses'=>'Auth\MyAuthController@showLogin', 'as'=>'login']);
    Route::post('/login',['uses'=>'Auth\MyAuthController@authenticate']);

});