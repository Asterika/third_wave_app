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

//create routes for each "page" within a PagesController
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/lingo', 'PagesController@lingo');
Route::get('/brew', 'PagesController@brew');
Route::get('/locate', 'PagesController@locate');
Route::get('/shops', 'PagesController@shops');

//later, create these controllers:
//UsersController
//ShopsController?


//above is shortened form of this route expression:
// Route::get('/', function () {
//     return view('welcome');
// });
