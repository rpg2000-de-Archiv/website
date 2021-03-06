<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/rpgmakertools/{orderby?}/{direction?}', 'RPGMakerToolsController@index');

Route::get('/contests/{orderby?}/{direction?}', 'ContestController@index');
Route::get('/contest/{id}', 'ContestController@show');

Route::get('/potms', 'POTMController@index');
Route::get('/potm/{id}', 'POTMController@show');

Route::get('/page/{slug}', 'PageController@index');

//Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
