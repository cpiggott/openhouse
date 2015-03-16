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

Route::get('/display/create', array(
	'as' => 'createDisplay',
	'uses' => 'DisplayController@getCreateDisplay'
	)
);

Route::post('/display/create', array(
	'as' => 'createDisplay',
	'uses' => 'DisplayController@postCreateDisplay'
	)
);

Route::get('display/view/{code}', array(
	'as' => 'viewDispaly',
	'uses' => 'DisplayController@getDisplay'
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
