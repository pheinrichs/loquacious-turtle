<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    Blade::setContentTags('<%', '%>');        // for variables and all things Blade
    Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');  

	Route::group(['middleware' => 'auth'], function () 
	{
		//catch URL requests
		Route::get('/', 'MainController@dashboard');
		Route::get('/home', 'MainController@dashboard');

		//seach Routes
		Route::get('/search', 'MainController@advSearch');
		Route::get('/advSearch/{field}/{param}', 'MainController@search');

		//customer routes
		Route::post('/newcustomer', ['uses' => 'MainController@newprofile']);
		Route::get('/user/{id}', ['uses' => 'MainController@index']);
		Route::post('/editProfile', ['uses' => 'MainController@editprofile']);

		//job routes
		Route::get('/jobs/{id}', ['uses' => 'MainController@jobs']);
		Route::get('/job/{id}/{custID}', ['uses' => 'MainController@jobDetail']);
		Route::post('/newjob', ['uses' => 'MainController@createJob']);
		Route::get('/remove/job/{jobNumber}', ['uses' => 'MainController@deleteJob']);
		Route::get('/editjob', ['uses' => 'MainController@editJob']);

		//picture routes
		Route::get('/pictures/{id}/{jobNumber}', function($id,$jobNumber)
		{
			$jobImages = json_encode(DB::table('jobImages')-> where('customerID', $id)-> where('jobNumber', $jobNumber)->get());
			return $jobImages;
		});
	});