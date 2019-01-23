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
 
  return view('home',array('name' => 'Projet Web'));
});

Route::get('connexion', function () {
 
  return view('connexion',array('name' => 'Projet Web'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
