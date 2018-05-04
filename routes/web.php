<?php

Route::get('/', 'HomeController@landing')->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function()  {

//user area 

	//User Area Channel
	Route::get('forum/trashed', 'UserDiscussionController@trashed')
	->name('forum.trashed');
	Route::get('forum/{slug}/restore', 'UserDiscussionController@restore')
	->name('forum.restore');
	Route::delete('forum/{slug}/kill', 'UserDiscussionController@kill')
	->name('forum.kill');
	Route::post('forum/{slug}', 'UserDiscussionController@reply')->name('forum.reply');
	Route::delete('forum/{slug}/reply/destroy', 'UserDiscussionController@r_destroy')->name('forum.r_destroy');
	Route::resource('forum', 'UserDiscussionController');

	//User area home
	Route::get('/{slug}', 'UserAreaController@index')->name('user');
	Route::get('/{slug}/edit', 'UserAreaController@edit')->name('user.edit');
	Route::patch('/{slug}/update', 'UserAreaController@update')->name('user.update');

	//User Area Profile
	Route::get('profile/{slug}', 'UserProfileController@show')->name('profile');
	Route::get('profile/{slug}/edit', 'UserProfileController@edit')->name('profile.edit');
	Route::patch('profile/{slug}/update', 'UserProfileController@update')->name('profile.update');

	//User Area Channel
	Route::get('channel/{slug}', 'UserChannelController@show')->name('channel');
	Route::get('channel/{slug}/edit', 'UserChannelController@edit')->name('channel.edit');
	Route::patch('channel/{slug}/update', 'UserChannelController@update')->name('channel.update');
	Route::get('channel/{slug}/create', 'UserChannelController@create')->name('channel.create');


});


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function()  {

//admin 
	//admin Dashboard
	Route::get('/', 'DashboardController@index')->name('dashboard');

	//admin Users
	Route::get('users/trashed', 'UserController@trashed')->name('users.trashed');
	Route::get('users/{slug}/restore', 'UserController@restore')->name('users.restore');
	Route::delete('users/{slug}/kill', 'UserController@kill')->name('users.kill');
	Route::resource('users', 'UserController');

//admin Tags
	Route::get('tags/trashed', 'TagController@trashed')->name('tags.trashed');
	Route::get('tags/{slug}/restore', 'TagController@restore')->name('tags.restore');
	Route::delete('tags/{slug}/kill', 'TagController@kill')->name('tags.kill');
	Route::resource('tags', 'TagController');

//admin Statuses
	Route::get('status/trashed', 'DashboardStatusController@trashed')->name('status.trashed');
	Route::resource('status', 'DashboardStatusController');

//admin Roles
	Route::resource('roles', 'DashboardRolesController');

//admin Images
	Route::get('images/trashed', 'DashboardImagesController@trashed')->name('images.trashed');
	Route::get('images/{slug}/restore', 'DashboardImagesController@restore')->name('images.restore');
	Route::delete('images/{slug}/kill', 'DashboardImagesController@kill')->name('images.kill');
	Route::resource('images', 'DashboardImagesController');

//admin Profiles
	Route::get('profiles/{id}/allow', 'DashboardProfileController@allow')->name('profiles.allow');
	Route::get('profiles/{id}/ban', 'DashboardProfileController@ban')->name('profiles.ban');
	Route::get('profiles/trashed', 'DashboardProfileController@trashed')->name('profiles.trashed');
	Route::get('profiles/{slug}/restore', 'DashboardProfileController@restore')->name('profiles.restore');
	Route::delete('profiles/{slug}/kill', 'DashboardProfileController@kill')->name('profiles.kill');
	Route::resource('profiles', 'DashboardProfileController');

//admin posts
	Route::get('posts/trashed', 'PostController@trashed')->name('posts.trashed');
	Route::get('posts/{slug}/restore', 'PostController@restore')->name('posts.restore');
	Route::delete('posts/{slug}/kill', 'PostController@kill')->name('posts.kill');
	Route::resource('posts', 'PostController');

//admin posts-comments
	Route::resource('comments', 'PostCommentsController');	
	Route::post('comments/{slug}', 'PostCommentsController@tocomment')->name('comments.tocomment');
	Route::get('comments/{id}/like', 'PostCommentsController@like')->name('comments.like');
	Route::get('comments/{id}/unlike', 'PostCommentsController@unlike')->name('comments.unlike');


//admin posts-comments-replies	
	Route::resource('comments/replies', 'CommentRepliesController');
	Route::post('comments/replies/{slug}', 'CommentRepliesController@tocomment')->name('comments.replies.tocomment');
	Route::get('comments/replies/{id}/like', 'CommentRepliesController@like')->name('comments.replies.like');
	Route::get('comments/replies/{id}/unlike', 'CommentRepliesController@unlike')->name('comments.replies.unlike');


//admin pages
	Route::get('pages/trashed', 'PagesController@trashed')->name('pages.trashed');
	Route::get('pages/{slug}/restore', 'PagesController@restore')->name('pages.restore');
	Route::delete('pages/{slug}/kill', 'PagesController@kill')->name('pages.kill');
	Route::resource('pages', 'PagesController');

//admin postcategories
	Route::get('postcategories/trashed', 'PostcategoriesController@trashed')
	->name('postcategories.trashed');
	Route::get('postcategories/{slug}/restore', 'PostcategoriesController@restore')
	->name('postcategories.restore');
	Route::delete('postcategories/{slug}/kill', 'PostcategoriesController@kill')
	->name('postcategories.kill');
	Route::resource('postcategories', 'PostcategoriesController');

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
//admin best_replies
	Route::get('replies/best/reply/{id}', 'DashboardReplyController@best_answer')->name('best.reply');
	
//admin watchers
	Route::get('discussions/watch/{id}', 'WatchersController@watch')->name('discussions.watch');
	Route::get('discussions/unwatch/{id}/', 'WatchersController@unwatch')->name('discussions.unwatch');

});