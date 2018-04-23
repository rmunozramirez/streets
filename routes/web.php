<?php

Route::get('/', 'HomeController@landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function()  {

//admin 
	//admin Dashboard
	Route::get('/', 'DashboardController@index')->name('dashboard');
	// Route::get('/create', 'DashboardController@create')->name('dashboard.create');
	// Route::get('/trashed', 'DashboardController@trashed')->name('dashboard.trashed');

//admin Statuses
	Route::resource('status', 'DashboardStatusController');

//admin Roles
	Route::resource('roles', 'DashboardRolesController');

//admin Profiles
	Route::get('profiles/{slug}/allow', 'DashboardProfileController@allow')->name('profiles.allow');
	Route::get('profiles/{slug}/bann', 'DashboardProfileController@bann')->name('profiles.bann');
	Route::get('profiles/trashed', 'DashboardProfileController@trashed')->name('profiles.trashed');
	Route::get('profiles/{slug}/restore', 'DashboardProfileController@restore')->name('profiles.restore');
	Route::delete('profiles/{slug}/kill', 'DashboardProfileController@kill')->name('profiles.kill');
	Route::resource('profiles', 'DashboardProfileController');

//admin channels
	Route::get('channels/trashed', 'DashboardChannelsController@trashed')->name('channels.trashed');
	Route::get('channels/{slug}/restore', 'DashboardChannelsController@restore')->name('channels.restore');
	Route::delete('channels/{slug}/kill', 'DashboardChannelsController@kill')->name('channels.kill');
	Route::resource('channels', 'DashboardChannelsController');

//admin subcategories
	Route::get('subcategories/trashed', 'DashboardSubcategoriesController@trashed')
	->name('subcategories.trashed');
	Route::get('subcategories/{slug}/restore', 'DashboardSubcategoriesController@restore')
	->name('subcategories.restore');
	Route::delete('subcategories/{slug}/kill', 'DashboardSubcategoriesController@kill')
	->name('subcategories.kill');
	Route::resource('subcategories', 'DashboardSubcategoriesController');

//admin categories
	Route::get('categories/trashed', 'DashboardCategoriesController@trashed')
	->name('categories.trashed');
	Route::get('categories/{slug}/restore', 'DashboardCategoriesController@restore')
	->name('categories.restore');
	Route::delete('categories/{slug}/kill', 'DashboardCategoriesController@kill')
	->name('categories.kill');
	Route::resource('categories', 'DashboardCategoriesController');

//admin discussions
	Route::get('discussions/trashed', 'DashboardDiscussionsController@trashed')
	->name('discussions.trashed');
	Route::get('discussions/{slug}/restore', 'DashboardDiscussionsController@restore')
	->name('discussions.restore');
	Route::delete('discussions/{slug}/kill', 'DashboardDiscussionsController@kill')
	->name('discussions.kill');
		Route::get('discussions/{id}/like', 'DashboardDiscussionsController@like')->name('discussions.like');
	Route::get('discussions/{id}/unlike', 'DashboardDiscussionsController@unlike')->name('discussions.unlike');
	Route::post('discussions/{slug}', 'DashboardDiscussionsController@reply')->name('discussions.reply');
	Route::delete('discussions/{slug}/reply/destroy', 'DashboardDiscussionsController@r_destroy')->name('discussions.r_destroy');
	Route::resource('discussions', 'DashboardDiscussionsController');

//admin replies
	Route::get('replies/{id}/like', 'DashboardReplyController@like')->name('replies.like');
	Route::get('replies/{id}/unlike', 'DashboardReplyController@unlike')->name('replies.unlike');

});