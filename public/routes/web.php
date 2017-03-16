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
	return view('dashboard');
});

Route::get('/dashboard', function () {
	return view('dashboard');
});
Route::get('/customerlist', function () {
	return view('customerlist');
});
Route::get('/feedback', function () {
	return view('feedback');
});
Route::get('/discount', function () {
	return view('discount');
});
Route::get('/product', function () {
	return view('product');
});
Route::get('/summary', function () {
	return view('summary');
});
Route::get('/adjustment', function () {
	return view('adjustment');
});
Route::get('/report', function () {
	return view('report');
});
Route::get('/addproduct', function () {
	return view('addproduct');
});
