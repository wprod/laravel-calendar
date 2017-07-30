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

Auth::routes();

Route::group( ['middleware' => 'auth' ], function()
{
    //Event mangement
    Route::get('/evenement-creation', 'CalendarController@create')->name('eventCreate');
    Route::post('/evenement-creation', 'CalendarController@store')->name('eventStore');

    Route::get('/evenement/{event}/edition', 'CalendarController@edit')->name('eventEdit');
    Route::post('/evenement/{event}', 'CalendarController@update')->name('eventUpdate');

    Route::get('/evenement/{evenement}/supr', 'CalendarController@destroy')->name('eventDelete');

});
//Open routes
Route::get('/', 'CalendarController@index')->name('eventIndex');
Route::get('/evenement/{event}', 'CalendarController@show')->name('eventShow');
