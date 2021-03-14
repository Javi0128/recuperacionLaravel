<?php

use App\Models\LibroUser;
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

Route::get('/dashboard', 'LibroController@index')->middleware(['auth'])->name('dashboard');

// Route::get('/alquiler/create', 'LibroController@create')->middleware(['auth'])->name('alquiler.crear');

// Route::post('/alquiler/store', 'LibroController@store')->middleware(['auth'])->name('alquiler.store');

// Route::get('/alquiler/destroy/{idUser}/{idLibro}', 'LibroController@destroy')->middleware(['auth'])->name('alquiler.destroy');

Route::get('/alquiler/edit/{idUser}/{idLibro}', 'LibroController@edit')->middleware(['auth'])->name('alquiler.edit');

Route::resource('alquiler', 'LibroController')->middleware(['auth']);

// Route::put('/alquiler/update/{alquiler}', 'LibroController@update')->middleware(['auth'])->name('alquiler.update');

require __DIR__.'/auth.php';
