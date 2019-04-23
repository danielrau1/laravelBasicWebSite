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
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('contact/submit','MessagesController@submit');

//DR: this is for the above but with the car management method
//Route::post('/contact/submit',[
//    'uses'=>'MessagesController@submit',
//    'as'=>'contact.submit'
//]);


Route::get('/messages','MessagesController@getMessages');
