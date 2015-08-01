<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
    'upload'=>'file\UploadController',
    'email'=>'EmailController'
]);

Route::get('blog/{id}','BlogController@show');
Route::get('home/{id}','HomeController@index');
Route::group(['namespace'=>'ucenter','prefix'=>'ucenter', 'middleware'=>'auth'],function(){

    Route::resources([
       'blog'=>'BlogController'
    ]);
});
Route::get('comment','CommentController@index');
Route::get('comment/chats/{id}','CommentController@chats');
Route::group(['middleware'=>'auth'],function(){

    Route::resource('comment','CommentController',  ['only'=>['store','destroy']]);
    Route::controllers([
       'comment'=>'CommentController'
    ]);

});

Route::get('/', function (\Illuminate\Auth\Guard $guard) {


    return view('welcome');
});

