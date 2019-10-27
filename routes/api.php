<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::post('createUser', 'UserCredentialController@saveAdmin');
Route::post('login', 'UserCredentialController@login');
Route::post('changePass', 'UserCredentialController@changePassword');
Route::get('getAllUserId', 'UserCredentialController@getAllUserId');
Route::post('adminResetPass', 'UserCredentialController@adminResetPassword');
Route::post('createDivision', 'DivisionController@createDivision');
Route::get('getAllDivision', 'DivisionController@getAllDivisions');
Route::post('createDistrict', 'DistrictController@createDistrict');
Route::get('getAllDistricts', 'DistrictController@getAllDistricts');
Route::post('createBlog', 'BlogController@createBlog');
Route::get('getAllDistrict', 'BlogController@getAllDistricts');
Route::get('getAllDivisions', 'BlogController@getAllDivisions');




