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

// Auth::routes();
Auth::routes(['verify' => true]);

// Language Translation
Route::get('index/{locale}', 'HomeController@lang');

//Socialite 
// Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('/auth/redirect/{provider}', 'SocialController@redirect')->where('provider','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/callback/{provider}', 'SocialController@callback')->where('provider', 'twitter|facebook|linkedin|google|github|bitbucket');

Route::get('/', 'HomeController@root');

Route::group(['middleware' => 'auth'], function (){
  Route::resource('calendars', 'CalendarController');
  Route::get('calendar', function(){
    return view('calendar/calendar');
  });
  Route::resource('users', 'UserController');
});

Route::get('{any}', 'HomeController@index');