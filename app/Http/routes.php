<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Set Home Route
Route::get('/', array('as' => 'home', function()
{
    return View::make('pages/home');
}));

Route::get('home', 'HomeController@index');


// Set Routes to static pages

Route::get('/discgolf', array('as' => 'discgolf', function()
{
    return View::make('pages/discgolf');
}));

Route::get('/hiking', array('as' => 'hiking', function()
{
    return View::make('pages/hiking');
}));

Route::get('/contact', array('as' => 'contact', function()
{
    return View::make('pages/contact');
}));

Route::get('/kayak', array('as' => 'kayak', function()
{
    return View::make('pages/kayak');
}));

Route::get('/camping', array('as' => 'camping', function()
{
    return View::make('pages/camping');
}));






//Set routes for users

Route::get('/login', array('as' => 'login', function()
{
    return View::make('/auth/login');
}));
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
