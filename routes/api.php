<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::namespace('Api')->group( function () {
    Route::get('getCurrentLecture/{classroom}', 'ApiController@getCurrentLecture');
    Route::post('addAttendanceRecord/{attendance_list_id}', 'ApiController@addAttendanceRecord');
    Route::post('register/{nfc_id}', 'ApiController@register');
});

