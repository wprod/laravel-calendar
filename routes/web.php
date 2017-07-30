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
    Route::get('/evenement_creation', 'CalendarController@create')->name('eventCreate');
    Route::post('/evenement_creation', 'CalendarController@store')->name('eventStore');

    Route::get('/evenement/edit/{event}', 'CalendarController@edit')->name('eventEdit');
    Route::put('/evenement/{event}', 'CalendarController@update')->name('eventUpdate');

    Route::get('/evenement_management', 'CalendarController@listEvent')->name('eventList');

    Route::delete('/delete/{event}', 'CalendarController@destroy')->name('eventDelete');

});
//Open routes
Route::get('/', 'CalendarController@index')->name('eventIndex');
Route::get('/evenement/oklm/{event}', 'CalendarController@show')->name('eventShow');
