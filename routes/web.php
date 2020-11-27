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

Route::get('/', function () {
    return view('welcome');
});
// returning a String not the view
Route::get('/hello', function () {
    return 'Hello World...!';
});
// Throwing some html in to it ...!
Route::get('/heading', function () {
    return '<h1>Heading</h1>';
});
// before going any further lets checkout
// our routes are working or not...!
Route::get('/users/{id}', function ($id) {
    return '<h1> Here is your id'.$id.' </h1>';
});
Route::get('/users/{id}/{name}', function ($id,$name) {
    return '<h1> Here is your id'.$id.' names '.$name.' </h1>';
});
//till now routes are working completely fine..!

//Before going any further its not a best practice to just
// return a view from routes its good to use a cntroller/
// jusr send a request toa a controller and that controller wll retur
// the view asap
// so lets do that by giving this simple artisan command to
// make a pages controller
// php artisan make:controller pagesController
//Route::get('/index','pagesController@index');
//simple just called the index function that will return the view
//Lets try it out
//Yeah its working just fine ...!
//repeating html lets use layouts just not to repeat our self
//for that lets create a layout folder in views

// okay remember to install the blade syntax extention



Route::get('/services','pagesController@services');
Route::get('/about','pagesController@about');
Route::get('/posts','pagesController@posts');
Route::get('/','pagesController@home');
Route::get('/index','pagesController@index');







