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

Auth::routes();

use App\Http\Controllers\HomeController;
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/admin', 'AdminController@index');
// Route::get('/user', 'UserController@index');

use App\Http\Controllers\AdminController;
Route::get('admin',[App\Http\Controllers\AdminController::class, 'index']);

use App\Http\Controllers\UserController;
Route::get('user',[App\Http\Controllers\UserController::class, 'index']);
