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

//Routes for main pages
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/lingo', 'PagesController@lingo');
Route::get('/brew', 'PagesController@brew');
Route::get('/locate', 'PagesController@locate');

//Routes
// Route::get('/shops', 'ShopsController@index');
// Route::post('/shops', 'ShopsController@store');
// Route::get('/shops/create', 'ShopsController@create');


Route::resource('shops', 'ShopsController');
// //show an individual coffee shop profile:
// Route::get('/shops/{shop}', 'ShopsController@show');
// //edit a single shop by id
// Route::get('/shops/{shop}/edit', 'ShopsController@edit');
// //update a single shop by id
// Route::patch('/shops/{shop}', 'ShopsController@update');
// //delete a single shop by id
// Route::delete('/shops/{shop}', 'ShopsController@destroy');
//later, create these controllers:
//UsersController
//ShopsController?


//above is shortened form of this route expression:
// Route::get('/', function () {
//     return view('welcome');
// });
