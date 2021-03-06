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

Route::get('/','JobsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('job', 'JobsController');
//Route::get('/job/apply/{jobid}', 'JobsController@apply');
Route::Resource('employer','EmployerController');
