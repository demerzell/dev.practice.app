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

Route::get('/', function () {
    return view('welcome');
});

/* This is inline and it's really useful for small basic applications*/
Route::get('/viewdata', function () {
    $people = ['Zoltan', 'Tamara'];
    return view('pages.viewdata', compact('people'));
});

Route::get('/about', 'AboutController@about');

/*Layout router*/
Route::get('/layout/welcome','LayoutController@layout_welcome');
Route::get('/layout/about','LayoutController@layout_about');

/*Card controller*/
Route::get('/cards/index','CardController@card_index');
Route::get('/cards/{card}','CardController@card_show');

Route::post('/cards/{card}/notes','NoteController@store');
/*
 * return view('welcome');
 * és
 * return View::make();
 * ugyan azt a kódot futtatja
 */