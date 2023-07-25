<?php

use App\Http\Livewire\Asistencias;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Personas;
use App\Http\Livewire\Tareas;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\Programaciones;
use App\Http\Livewire\Calendario;
use App\Http\Livewire\Categorias;
use App\Http\Livewire\Jugadores;
use App\Http\Livewire\Pagos;
use App\Http\Livewire\Temporadas;
use App\Http\Livewire\Inscripciones;
use App\Http\Livewire\Usuarios;
use App\Models\Asistencia;
use App\Models\Pago;
use App\Models\Temporada;

use Illuminate\Support\Facades\Storage;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/usuarios',Usuarios::class)->name('usuarios');
    Route::get('/jugadores',Jugadores::class)->name('jugadores');
    Route::get('/categorias',Categorias::class)->name('categorias');
    Route::get('/asistencias',Asistencias::class)->name('asistencias');
    Route::get('/pagos',Pagos::class)->name('pagos');
    Route::get('/temporadas',Temporadas::class)->name('temporadas');
    Route::get('/inscripciones',Inscripciones::class)->name('inscripciones');
    // Route::get('/tecnicocalendario',function(){return View::make("livewire.tecnico-calendario");})->name('tecnicocalendario');
});

// Route::get('storage/{filename}', function ($filename) {
//     $path = storage_path('app/public/' . $filename);
    
//     if (!Storage::exists($path)) {
//         abort(404);
//     }
    
//     return response()->file($path);
// })->where('filename', '.*');
