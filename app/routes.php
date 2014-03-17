<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('me-quiero-casar', 'HomeController@wantToMarry');
Route::get('busco-catering', 'HomeController@searchCatering');
Route::get('quiero-compartir', 'HomeController@wantToShare');
Route::get('linea-boutique', 'HomeController@lineBoutique');
Route::get('linea-petit', 'HomeController@li	nePetit');
Route::get('contacto', 'HomeController@contact');
Route::get('el-chef', 'HomeController@chef');
Route::get('el-salon-de-te', 'HomeController@te');
Route::post('contact', 'ContactsController@store');
Route::get('blog', 'BlogController@index');
Route::get('blog/{title}', 'BlogController@show');

Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
	Route::get('blog', 'BlogController@index');
});

