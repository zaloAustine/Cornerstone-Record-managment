<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function () {

Route::get('dashboard','DashBoardController@index')->name('dashboard');
Route::get('sermons','SermonController@index')->name('sermons');
Route::get('events','EventController@index')->name('events');
Route::get('records','RecordController@index')->name('records');
Route::get('getrecords','RecordController@getRecords')->name('getrecords');

    Route::get('addSermon','SermonController@addSermon')->name('addSermon');
    Route::get('addEvent','EventController@addEvent')->name('addEvent');
    Route::get('addRecord','RecordController@addRecord')->name('addRecord');

    Route::post('UploadImage','EventController@UploadImage')->name('UploadImage');


});






Route::get('login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
