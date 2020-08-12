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

Route::get('/', 'Cloud\ServiceController@showServices')->name('cloud.services');
Route::post('/service-details', 'Cloud\ServiceController@showServiceDetails')->name('cloud.service.details');
