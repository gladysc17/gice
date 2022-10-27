<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SemilleroController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RedController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InvestigadorController;
use App\Http\Controllers\LineaInvestigacionController;
use App\Http\Controllers\PublicacionController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
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
    Route::get('/proyecto', function () {
        return view('proyecto');
    });
    Route::get('/red', function () {
        return view('red');
    });
    Route::get('/publicacion', function () {
        return view('publicacion');
    });
});

Route::get('/', [FrontController::class, 'index']);

Route::resource('semillero', SemilleroController::class);

Route::resource('proyecto', ProyectoController::class);

Route::resource('red', RedController::class);

Route::resource('evento', EventoController::class);

Route::resource('investigador', InvestigadorController::class);

Route::resource('linea', LineaInvestigacionController::class);

Route::resource('publicacion', PublicacionController::class);

