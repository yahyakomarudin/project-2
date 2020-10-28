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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/codes', function () {
    return view('codes');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/mail', function () {
    return view('mail');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/products1', function () {
    return view('products1');
});
Route::get('/registered', function () {
    return view('registered');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/checkout2', function () {
    return view('checkout2');
});
Route::get('/codes2', function () {
    return view('codes2');
});
Route::get('/mail2', function () {
    return view('mail2');
});
Route::get('/products2', function () {
    return view('products2');
});
Route::get('/products12', function () {
    return view('products12');
});
Route::get('/registered2', function () {
    return view('registered2');
});
