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
Route::get('/dashboard', function () {
	return view('dashboard');
});

Route::get('/register', function () {
	return view('credential/register');
});

Route::get('/adminResetPassword', function () {
	return view('credential/adminResetPassword');
});

Route::get('/resetPassword', function () {
	return view('credential/resetPassword');
});

Route::get('/district', function () {
	return view('blog/district');
});

Route::get('/division', function () {
	return view('blog/division');
});

Route::get('/blog', function () {
	return view('blog/blog');
});

Route::get('login/logout', function () {
	return (String)view('credential/logout_view');
});

