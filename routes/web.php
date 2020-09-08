<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Auth::routes();
Route::resource('employees','EmployeeController');
Route::resource('companies','CompanyController');
//Route::resource('persons','PersonController');


Route::get('ajax','TestController@ajax');
Route::post('ajax','TestController@postAjax');
Route::get('ajaxExample','TestController@ajaxExample');
Route::post('postAjaxExample','TestController@postAjaxExample');

Route::get('persons','PersonController@index');
Route::get('persons/create','PersonController@create');
Route::get('persons/{id}','PersonController@show');
Route::post('persons/create','PersonController@store');
Route::get('persons/{id}/edit','PersonController@edit');
Route::post('persons/{id}/update','PersonController@update');
Route::delete('persons/{id}/delete','PersonController@destroy');


Route::get('storage/public/images/{filename}', function ($filename) {
    if(Storage::exists('public/images/'.$filename)){
        return Storage::get('public/images/'.$filename);
    }
//    $userid = session()->get('user')->id;
});

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/{age}','PersonController@middlewareCheck')->middleware('age');
Route::view('/','welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/collectionMethods','PersonController@collectionMethods');

Route::get('blog/create','TestController@blogCreate');
Route::post('blog/create','TestController@storeBlog');
