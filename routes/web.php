<?php

use Illuminate\Support\Facades\Route;
use App\Events\MessageSent;

use App\Tag;

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




// Main Routes
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');






// Author routes
Route::prefix('author')->group(function(){
    // Dashboard
    Route::get('/', 'Author\DashboardController@getAuthorDashboard')->name('author.dashboard');

    Route::get('/profile', 'Author\DashboardController@getAuthorDashboard')->name('author.profile');
    Route::post('/profile', 'Author\DashboardController@getAuthorDashboard')->name('author.profile.update');


    // Request Post
    Route::get('/post','Author\DashboardController@seeAllPosts')->name('author.post');
    Route::post('/post','Author\DashboardController@requestPostApproval')->name('author.post.submit');

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

    // POSTS    Add, approve, edit, update and delete 
    Route::get('/post', 'Admin\DashboardController@showAllPosts')->name('admin.post');
    Route::post('/post', 'Admin\DashboardController@createPost')->name('admin.post.submit');

    Route::post('/post-approve', 'Admin\DashboardController@approvePost')->name('admin.post.approve');

    Route::get('/post/{id}', 'Admin\DashboardController@editPost')->name('admin.post.edit');
    Route::post('/post-update/{id}', 'Admin\DashboardController@updatePost')->name('admin.post.update');

    Route::post('/post-delete', 'Admin\DashboardController@deletePost')->name('admin.post.delete');


    // Author View, Create and delete 
    Route::get('/create-author', 'Admin\SpecialUserRegistrationController@showAuthorRegisterForm')->name('author');
    Route::post('/create-author', 'Admin\SpecialUserRegistrationController@createNewAuthor')->name('create.author');
    Route::post('/author-delete/{id}', 'Admin\SpecialUserRegistrationController@deleteAuthor')->name('author.delete');


     // Admin View, Create and delete 
    Route::get('/create-admin', 'Admin\SpecialUserRegistrationController@showAdminRegisterForm')->name('admin');
    Route::post('/create-admin', 'Admin\SpecialUserRegistrationController@createNewAdmin')->name('create.admin');
    Route::post('/admin-delete/{id}', 'Admin\SpecialUserRegistrationController@deleteAdmin')->name('admin.delete');


    // CRUD Slider

    Route::get('/slider', 'Admin\SliderController@view')->name('admin.slider');
    Route::post('/slider', 'Admin\SliderController@store')->name('admin.slider.submit');
    Route::get('/slider/{id}', 'Admin\SliderController@edit')->name('admin.slider.edit');
    Route::post('/slider-update/{id}', 'Admin\SliderController@update')->name('admin.slider.update');
    Route::post('/slider-delete/{id}' ,'Admin\SliderController@delete')->name('admin.slider.delete');


    // Login
    Route::get('/login', 'SpecialUserLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('/login', 'SpecialUserLoginController@adminLogin')->name('admin.login.submit');
    // Register
    Route::get('/register', 'Admin\SpecialUserRegistrationController@showAdminRegisterForm')->name('admin.register');
    Route::post('/register', 'Admin\SpecialUserRegistrationController@createNewAdmin')->name('admin.register.submit');
});






