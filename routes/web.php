<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Cors;

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
 /* page routes - it loads each view when called*/
Route::get('/', 'HomeController@index');

Route::get('contact', function () {
    return view('contact');
});
Route::get('faq', function () {
    return view('faq');
});

Route::get('about', function () {
    return view('about');
});

Route::get('confirm', function () {
    return view('confirm');
});

Route::get('home', function () {
    return view('home');
});

/* to show and store the info on contact blade form*/
Route::get('contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Route::resource('TrackProgressCRUD','TrackProgressCRUDController');

/*authentication routes*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'cors'], function () {

    // List
    Route::get('progressCRUD/list','ProgressCRUDController@index');

    // Show
    Route::get('progressCRUD/{id}', 'ProgressCRUDController@show');

    // Update
    Route::post('progressCRUD/{id}/update', 'ProgressCRUDController@update');

    // Delete
    Route::get('progressCRUD/{id}/delete', 'ProgressCRUDController@destroy');

    // Update by helpdesk
    Route::post('progressCRUD/{id}/helpdesk', 'ProgressCRUDController@helpdesk');

    // Update by tech people
    Route::post('progressCRUD/{id}/tech', 'ProgressCRUDController@tech');

});
