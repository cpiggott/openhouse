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

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@showWelcome'
	)
);

Route::get('/signout', array(
	'as' => 'signout',
	'uses' => 'UserController@getSignOut'
	)
);

Route::get('/limited', array(
	'as' => 'limited',
	'uses' => 'LimitedController@showLimited'
	)
);



/* Un-authenticated users */

Route::group(array('before'=> 'guest'), function(){

	Route::group(array('before' => 'csrf'), function(){

		Route::post('create', array(
			'as' => 'account-create-post',
			'uses' => 'UserController@postCreate'
			)
		);

	});

	Route::get('create', array(
		'as' => 'account-create',
		'uses' => 'UserController@getCreate'
		)
	);


	Route::get('/signin', array(
		'as' => 'sign-in',
		'uses' => 'UserController@getSignIn'
		)
	);

	Route::post('/signin', array(
		'as' => 'sign-in',
		'uses' => 'UserController@postSignIn'
		)
	);


});
