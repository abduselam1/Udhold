<?php

// require_once('classes/Route.php');
//  first parameter=route name and ther second pramater is controller , and the third is middleware

Route::get('home','PublicController@index');

Route::get('catagories/{catagory_name}','PublicController@showByCatagories');
// Route::post('file-check','UserController@fileTest');

Route::get('about','UserController@about');

Route::get('login', "LoginController@showLoginForm",'guard');

Route::post('logout', "LoginController@logout",'auth');


Route::post('login-handler',"LoginController@login",'guard');

Route::get('model-test','UserController@testModel');

Route::post('post-form','UserController@post');

// ADMIN ROUTES

Route::get('admin/dashboard','AdminController@index','auth');

Route::get('admin/posts','AdminController@showPost','auth');

Route::get('admin/create-post', 'AdminController@showPostForm','auth');

// Route::post('admin/post','AdminController@post','auth');

Route::get('admin/post/{id}','AdminController@findPost','auth');

Route::get('admin/post/{id}/edit', 'AdminController@editPost', 'auth');

Route::get('admin/post/{id}/delete', 'AdminController@deletePost', 'auth');

Route::post('admin/post/{id}/update', 'AdminController@updatePost', 'auth');

///route for catagory
Route::get('admin/catagories','AdminController@showCatagory','auth');

Route::post('admin/catagory','AdminController@Catagory','auth');

Route::get('admin/create-catagory', 'AdminController@showCatagoryForm','auth');

// Route::get('admin/catagory/{id}','AdminController@findCatagory','auth');

Route::get('admin/catagory/{id}/edit', 'AdminController@editCatagory', 'auth');

Route::post('admin/catagory/{id}/update', 'AdminController@updateCatagory', 'auth');

Route::get('admin/catagory/{id}/delete', 'AdminController@deleteCatagory', 'auth');


///route for secret contents
Route::get('admin/secrets','AdminController@showSecret','auth');

Route::post('admin/secret','AdminController@secret','auth');

Route::get('admin/create-secret', 'AdminController@showSecretForm','auth');

Route::get('admin/secret/{id}','AdminController@findSecret','auth');

Route::get('admin/secret/{id}/edit', 'AdminController@editSecret', 'auth');

Route::post('admin/secret/{id}/update', 'AdminController@updateSecret', 'auth');

Route::get('admin/secret/{id}/delete', 'AdminController@deleteSecret', 'auth');




if(Route::$flag === false) {
    abort('404');
}