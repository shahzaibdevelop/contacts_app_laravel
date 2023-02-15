<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', 'App\Http\Controllers\ContactController@showData');
Route::get('/addcontact', function () {
    return view('Contact.addcontact');
});
Route::post('/submitcontact', 'App\Http\Controllers\ContactController@addData');
Route::get('edit/{id}','App\Http\Controllers\ContactController@edit');
Route::post('updatecontact/{id}','App\Http\Controllers\ContactController@update');

