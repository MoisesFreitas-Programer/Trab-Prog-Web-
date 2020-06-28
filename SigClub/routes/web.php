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

 Route::get('/', 'BookController@index');
//Route::get('/', 'UserController@index');
//Route::view('/', '/layout/login_cadastro/login');


Route::view('cadastro', '/layout/login_cadastro/cadastro');
Route::view('login', '/layout/login_cadastro/login');
Route::resource('books', 'BookController');
Route:: resource('users', 'UserController');

