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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'CocheController@index')->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/coche/add', 'CocheController@create')->name('coche.add');

    Route::post('/coche/store', 'CocheController@store')->name('coche.store');

    Route::get('/coche/destroy/{id}', 'CocheController@destroy')->name('coche.destroy');

    Route::get('/coche/edit/{id}', 'CocheController@edit')->name('coche.edit');

    Route::post('/coche/update/{id}', 'CocheController@update')->name('coche.update');
});

require __DIR__.'/auth.php';
