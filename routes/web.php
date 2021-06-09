<?php

use App\Http\Controllers\FrontController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mv', function () {
    return view('misionvision');
});


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/objetivo', function () {
        return view('objetivo');
    });
    Route::get('/valor', function () {
        return view('valor');
    });
    Route::get('/presentacion', function () {
        return view('presentacion');
    });
    Route::get('/linea', function () {
        return view('linea');
    });
    Route::get('/investigador', function () {
        return view('investigador');
    });
    Route::get('/servicio', function () {
        return view('servicio');
    });
    Route::get('/contacto', function () {
        return view('contacto');
    });
    Route::get('/semillero', function () {
        return view('semillero');
    });
    Route::get('/evento', function () {
        return view('evento');
    });
});

Route::get('/sample', [FrontController::class, 'index']);
