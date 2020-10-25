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
    return view('front.welcome');
})->name('main');


// User Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Author routes
Route::prefix('author')->group(function(){
    // Dashboard
    Route::get('/', 'Author\DashboardController@getAuthorDashboard')->name('author.dashboard');
    // Login
    Route::get('/login', 'SpecialUserLoginController@showAuthorLoginForm')->name('author.login');
    Route::post('/login', 'SpecialUserLoginController@authorLogin')->name('author.login.submit');
    // Register
    Route::get('/register', 'Admin\SpecialUserRegistrationController@showAuthorRegisterForm')->name('author.register');
    Route::post('/register', 'Admin\SpecialUserRegistrationController@createNewAuthor')->name('author.register.submit');
});


// Admin routes
Route::prefix('admin')->group(function(){
    // Dashboard
    Route::get('/', 'Admin\DashboardController@getAdminDashboard')->name('admin.dashboard');
    // Login
    Route::get('/login', 'SpecialUserLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'SpecialUserLoginController@adminLogin')->name('admin.login.submit');
    // Register
    Route::get('/register', 'Admin\SpecialUserRegistrationController@showAdminRegisterForm')->name('admin.register');
    Route::post('/register', 'Admin\SpecialUserRegistrationController@createNewAdmin')->name('admin.register.submit');
});