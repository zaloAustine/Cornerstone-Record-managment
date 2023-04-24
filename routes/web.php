<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function () {

Route::get('dashboard','DashBoardController@index')->name('dashboard');

Route::post('UploadSermon','SermonController@UploadSermon')->name('UploadSermon');

Route::post('postBulletin','discoverController@PostBulletin')->name('postBulletin');
Route::post('Postzoom','discoverController@Postzoom')->name('Postzoom');


Route::get('records','RecordController@index')->name('records');
Route::get('getrecords','RecordController@getRecords')->name('getrecords');

    Route::get('addSermon','SermonController@addSermon')->name('addSermon');
    Route::get('addEvent','EventController@addEvent')->name('addEvent');
    Route::get('addRecord','RecordController@addRecord')->name('addRecord');

    Route::post('UploadImage','EventController@UploadImage')->name('UploadImage');


});



    Route::post('AddPaymentRecord','RecordController@AddPaymentRecord')->name('AddPaymentRecord');
    Route::get('events','EventController@index')->name('events');
    Route::get('sermons','SermonController@index')->name('sermons');
    Route::get('/statics','RecordController@showStatics');






Route::get('login', function () {
    return view('login');
});

Route::get('zoom', function () {
    return view('addZoom');
});

Route::get('bulletin', function () {
    return view('addBulletin');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
