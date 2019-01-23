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
    return view('index');
});


Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');



Route::post('/home/checklogin', 'HomeController@checklogin');
Route::get('home/logout', 'HomeController@logout');



//admin
Route::get('/admin', 'AdminController@index');




Route::resource('admin/users', 'AdminUsersController');
//POST route
Route::post('/admin/users/create', 'AdminUsersController@addusers');