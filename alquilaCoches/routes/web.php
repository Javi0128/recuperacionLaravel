<?php

use App\Http\Controllers\CocheController;
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
    return redirect('/admin');
});

Route::get('/admin', 'CocheController@indexAdmin')->middleware(['auth','isAdmin']);

Route::get('/cliente', 'CocheController@indexCliente')->middleware(['auth']);

Route::get('/alquiler/crear', 'AlquilerController@index')->middleware(['auth','isAdmin'])->name('alquiler.crear');

Route::post('/alquiler/guardar', 'AlquilerController@create')->middleware(['auth','isAdmin'])->name('alquiler.guardar');

Route::get('/alquiler/editar/{idUser}/{idCoche}', 'AlquilerController@edit')->middleware(['auth','isAdmin'])->name('alquiler.editar');

Route::post('/alquiler/guardarEdicion/{idUser}/{idCoche}', 'AlquilerController@update')->middleware(['auth','isAdmin'])->name('alquiler.guardarEdicion');

Route::get('/alquiler/eliminar/{idUser}/{idCoche}', 'AlquilerController@delete')->middleware(['auth','isAdmin'])->name('alquiler.eliminar');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
