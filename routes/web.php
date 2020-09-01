<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes / routing here/
 /
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'controller1@method1')->name('home');
Route::get('/create', 'controller2@index')->name('create');
Route::post('/create', 'controller2@store')->name('store');
Route::get('/edit/{id}', 'controller2@edit')->name('edit');
Route::post('/update/{id}', 'controller2@update')->name('update');
Route::get('/delete/{id}', 'controller2@destroy')->name('delete');




Route::get('/hello', function () {
    return "hello world";
});

Route::get('/user/{id}', function ($id1) {
    return $id1;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
