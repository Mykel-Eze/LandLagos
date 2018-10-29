<?php

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

/*
|--------------------------------------------------------------------------
|   GET ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});


Route::view('/about', 'about', ['title' => "Landlagos- About"]);

Route::get('admin-home','AdminHomeController@index');//->name('admin.home');

Route::get('admin', 'Admin\LoginController@showLoginForm');



/*
|--------------------------------------------------------------------------
|   POST ROUTES
|--------------------------------------------------------------------------
*/
Route::post('create','Auth\RegisterController@create')->name('create');

Route::post('/contactus', 'ContactMailController@sendMail')->name('contactus');
Route::post('/newsletter','NewsletterController@sendNews')->name('newsletter');


Route::post('admin-login','Admin\LoginController@login')->name('admin-login');

Route::get('/contact', function () {
    return view('admin.contactdetails');
});

Auth::routes();






