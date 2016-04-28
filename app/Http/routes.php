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

//Route::get('/', function () {
    //return view('Pages.about');
//});

/* In  this case the route loads a class to process the get - page request 
*/

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/cards','CardsController@index');

// {card} is a variable name

Route::get('/cards/{card}','CardsController@show');

Route::post('/cards/{card}/notes','NotesController@store');

Route::get('/notes/{note}/edit','NotesController@edit');
