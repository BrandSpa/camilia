<?php
Route::get('/', 'HomeController@showHome');
Route::get('me-quiero-casar', 'HomeController@wantToMarry');
Route::get('busco-catering', 'HomeController@searchCatering');
Route::get('quiero-compartir', 'HomeController@wantToShare');
Route::get('linea-boutique', 'HomeController@lineBoutique');
Route::get('linea-petit', 'HomeController@linePetit');
Route::get('contacto', 'HomeController@contact');
Route::get('el-chef', 'HomeController@chef');
Route::get('el-salon-de-te', 'HomeController@te');
Route::post('contact', 'ContactsController@store');
Route::get('post/{title}', 'PostsController@show');

Route::get('blog', ['as' => 'blog', 'uses' => 'PostsController@index']);

Route::group(['before' => 'auth.basic', 'prefix' => 'admin', 'namespace' => 'Admin'], function()
{
	Route::resource('posts', 'PostsController');
});

