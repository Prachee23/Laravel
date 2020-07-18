<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' = ['web']], function() {
	Route::get('/', function () {
    	return view('welcome');
	});

	Route::post('/signup', [
		'users' => 'UserController@postSignUp',
		'as' => 'signup'
	]);
});
// Route::group(['prefix' => 'api/v1','namespace' => 'v1'], function(){
// 	Route::group(['middleware' =>['firebaseAuthn']], function(){
// 		Route::get('/', function () {
//     	return view('welcome');
//  	});

// 		Route::post('get-generic-settings',[
// 			'uses' => 'APIController@getSettings']);
// 	}
// });