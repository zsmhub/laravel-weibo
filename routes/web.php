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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
/* Route::get('/users', 'UsersController@index')->name('users.index'); // 列表
Route::get('/users/{user}', 'UsersController@show')->name('users.show'); // 信息展示页面
Route::get('/users/create', 'UsersController@create')->name('users.create'); // 新增页面
Route::post('/users', 'UsersController@store')->name('users.store'); // 保存新增功能
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit'); // 编辑页面
Route::patch('/users/{user}', 'UsersController@update')->name('users.update'); // 保存编辑功能
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy'); // 删除功能 */

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/rest/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::post('/statuses', 'StatusesController@store')->name('statuses.store');
Route::delete('/statuses/{status}', 'StatusesController@destroy')->name('statuses.destroy');

Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');
