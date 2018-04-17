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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {

//admin Dashboard
	Route::get('/', 'DashboardController@dashboard')->name('index');

//admin Profiles
	Route::get('profiles/trashed', 'DashboardProfileController@trashed')->name('profiles.trashed');
	Route::get('profiles/{slug}/restore', 'DashboardProfileController@restore')->name('profiles.restore');
	Route::get('profiles/{slug}/kill', 'DashboardProfileController@kill')->name('profiles.kill');
	Route::resource('profiles', 'DashboardProfileController');

//admin channels
	Route::get('channels/trashed', 'DashboardChannelsController@trashed')->name('channels.trashed');
	Route::get('channels/{slug}/restore', 'DashboardChannelsController@restore')->name('channels.restore');
	Route::get('channels/{slug}/kill', 'DashboardChannelsController@kill')->name('channels.kill');
	Route::resource('channels', 'DashboardChannelsController');

//admin subcategories
	Route::get('subcategories/trashed', 'DashboardSubcategoriesController@trashed')
	->name('subcategories.trashed');
	Route::get('subcategories/{slug}/restore', 'DashboardSubcategoriesController@restore')
	->name('subcategories.restore');
	Route::get('subcategories/{slug}/kill', 'DashboardSubcategoriesController@kill')
	->name('subcategories.kill');
	Route::resource('subcategories', 'DashboardSubcategoriesController');

//admin categories

	Route::get('categories/trashed', 'DashboardCategoriesController@trashed')
	->name('categories.trashed');
	Route::get('categories/{slug}/restore', 'DashboardCategoriesController@restore')
	->name('categories.restore');
	Route::get('categories/{slug}/kill', 'DashboardCategoriesController@kill')
	->name('categories.kill');
	Route::resource('categories', 'DashboardCategoriesController');

});