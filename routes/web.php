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

Route::get('storage/public/images/{filename}', function ($filename) {
    if(Storage::exists('public/images/'.$filename)){
        return Storage::get('public/images/'.$filename);

    }
//    $userid = session()->get('user')->id;
});

Route::get('/home', 'HomeController@index')->name('home');
