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

//Route::get('/', 'BookController@index');
//Route::get('/', 'UserController@index');
Route::view('/', '/layout/login_cadastro/login');
Route::get('home', 'BookController@index')->name('home');
Route::get('home/login', 'UserController@loginForm')->name('home.login');
Route::get('home/logout', 'UserController@logout')->name('home.logout');
Route::post('home/login/do', 'UserController@login')->name('home.login.do');
Route::get('/livros','BookController@index')->name('teste.livros');


Route::view('cadastro', '/layout/login_cadastro/cadastro');
Route::view('login', '/layout/login_cadastro/login');
Route::resource('books', 'BookController');
Route:: resource('users', 'UserController');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
