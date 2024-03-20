<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');
Route::get('/tasks/create', 'App\Http\Controllers\TaskController@create')->name('tasks.create');
Route::post('/tasks', 'App\Http\Controllers\TaskController@store')->name('tasks.store');
Route::get('/tasks/{id}/edit', 'App\Http\Controllers\TaskController@edit')->name('tasks.edit');
Route::put('/tasks/{id}', 'App\Http\Controllers\TaskController@update')->name('tasks.update');
Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@updatedestroy')->name('tasks.destroy');

