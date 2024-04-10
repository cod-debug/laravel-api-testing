<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);

Route::group([
	'prefix' => 'v1',
	'as' => 'api.',
	'namespace' => 'App\Http\Controllers\Api',
	'middleware' => ['auth:sanctum']
], function(){
	Route::apiResource('users', 'UserController');
});

Route::group([
	'prefix' => 'users',
	'as' => 'api.users.',
	'namespace' => 'App\Http\Controllers\Api',
	'middleware' => ['auth:sanctum']
], function(){
	Route::get('', 'UserController@index');
	Route::post('create', 'UserController@create');
});

Route::group([
	'prefix' => 'products',
	'as' => 'api.products.',
	'namespace' => 'App\Http\Controllers\Api',
	'middleware' => ['auth:sanctum']
], function(){
	Route::get('', 'ProductsController@index');
	Route::post('create', 'ProductsController@create');
	Route::put('update', 'ProductsController@update');
	Route::delete('delete', 'ProductsController@delete');
});
