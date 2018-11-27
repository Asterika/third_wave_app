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
use http verb to specify HOW to interact with the shops resource

GET /shops (index)
display a form for the user:
GET /shops/create (create)
show an individual profile
Get /shops/1 (show)
POST /shops (store)
PUT
use IDs for edit, update, and delete:
GET /shops/1/edit (edit)
PATCH /shops/1 (update)
DELETE /shops/1 (destroy)

*/

//create routes for each "page" within a PagesController
// have post request direct create route to store shops info

//===========================================
//          ROUTES FOR MAIN PAGES
//===========================================
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/lingo', 'PagesController@lingo');
Route::get('/brew', 'PagesController@brew');
Route::get('/locate', 'PagesController@locate');

//===========================================
//          ROUTES FOR CRUD PAGES
//===========================================
Route::resource('shops', 'ShopsController');

//===========================================
//             ROUTES FOR AUTH
//===========================================
Auth::routes();

Route::get('/shops/{shop}/edit', 'HomeController@index')->name('/shops/{shop}/edit')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('/register', 'HomeController@index')->name('home')->middleware('guest');
