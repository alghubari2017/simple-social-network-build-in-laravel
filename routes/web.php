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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
  return( view('welcome'));

});
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');

Route::get('/posts/index', 'PostController@index')->name('posts.index');
Route::get('/posts/delet/{id}', 'PostController@destroy')->name('posts.delet');
Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'PostController@update')->name('posts.update');



Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::get('/category/index', 'CategoryController@index')->name('category.index');
Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');


Route::get('/tag/create', 'TagController@create')->name('tag.create');
Route::post('/tag/store', 'TagController@store')->name('tag.store');
Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
Route::get('/tag/index', 'TagController@index')->name('tag.index');
Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');


Route::post('/user/create', 'UserController@create')->name('user.create');
Route::get('/user/index', 'UserController@index')->name('user.index');
Route::post('/user/store', 'UserController@store')->name('user.store');
Route::get('/user/admin/{id}', 'UserController@admin')->name('user.admin');
Route::get('/user/notadmin/{id}', 'UserController@notadmin')->name('user.notadmin');

Route::get('/ali',function(){

 // return  App\category::find(4)->posts;
  return  App\Tag::find(7)->posts;
} );




 