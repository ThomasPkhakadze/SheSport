<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageSent;


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
})->name('main');


// Auth Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/{user_id}', 'HomeController@getMessage')->name('get-message');
Route::post('/home', 'HomeController@sendMessage')->name('sent-message');