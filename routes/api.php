<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('events','EventController@allEvents');
Route::get('sermons','SermonController@allSermons');
Route::get('items','SermonController@allItems');
Route::get('Viewzoom','discoverController@Viewzoom');
Route::get('ViewBulletin','discoverController@ViewBulletin');


Route::post('postRecord2','RecordController@AddPaymentRecord2');

Route::post('postEvents','EventController@postEvents');
Route::post('postSermons','SermonController@postSermons');


