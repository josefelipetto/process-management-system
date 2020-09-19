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

Route::get('/', static function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'ProjectsController@index')->name('home')->middleware(['auth']);
Route::resource('projects', 'ProjectsController')->middleware(['auth']);
Route::resource('items', 'ItemsController')->middleware(['auth']);
Route::get('items/{item}/workflow', 'ItemsController@viewWorkflow')->name('items.workflow')->middleware(['auth']);
Route::resource('steps', 'StepsController')->middleware(['auth']);
