<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;

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

Route::get('counter/delete/{id}', 'CounterController@delete')->name('delete')->middleware('auth');
Route::get('counter/update', 'CounterController@update_current_read')->name('counter.update')->middleware('auth');

Route::resource('counters', 'CounterController')->middleware('auth');
Route::get('refresh', 'CounterController@refresh')->name('counters.refresh')->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home','HomeController@index');//->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/file-import','UserController@importView')->name('import-view');
Route::post('/import','UserController@import')->name('import');
Route::get('/export-users','UserController@exportUsers')->name('export-users');

Route::get('/counters_file-import','CounterController@importView')->name('import-view');
Route::post('/import','CounterController@import')->name('import');
Route::get('/export-counters','CounterController@exportCounters')->name('export-counters');
