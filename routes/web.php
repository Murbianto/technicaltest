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


    Route::get('/', 'App\Http\Controllers\HomeController@index');

    // Route::post('/createdata', 'App\Http\Controllers\HomeController@createdata');
    Route::get('/addData', 'App\Http\Controllers\CRUDController@index');
    Route::post('/createdata', 'App\Http\Controllers\CRUDController@createdata');
    Route::post('/updatedata', 'App\Http\Controllers\CRUDController@updatedata');
    Route::get('/deleteemployees/{id}', 'App\Http\Controllers\CRUDController@deletedata');
    Route::get('/editemployees/{id}', 'App\Http\Controllers\CRUDController@editdata');
    Route::get('/exportData', 'App\Http\Controllers\CRUDController@exportdata');
    Route::get('/exportperemployee/{id}', 'App\Http\Controllers\CRUDController@exportperemployee');
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
