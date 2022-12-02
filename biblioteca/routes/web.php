    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvista;
use App\Http\Controllers\controladorLibros;
use App\Http\Controllers\controladorAutores;

//Rutas para controlador resource

//Index Libros
Route::get('consultalibro',[controladorLibros::class,'index'])->name('consultalibro.index');

//Create Libros
Route::get('consultalibro/create', [controladorLibros::class,'create']) ->name('consultalibro.create'); 

/*Store Libro*/
Route::post('consultalibro', [controladorLibros::class,'store'])->name('consultalibro.store');

/*Edit Libro*/
Route::get('consultalibro/{id}/edit', [controladorLibros::class,'edit'])->name('consultalibro.edit');

/*Update Libro*/
Route::put('consultalibro/{id}', [controladorLibros::class,'update'])->name('consultalibro.update');

/*Show Libro*/
Route::get('consultalibro/{id}/show', [controladorLibros::class,'show'])->name('consultalibro.show');

/*Delete Libro*/
Route::delete('consultalibro/{id}', [controladorLibros::class,'destroy'])->name('consultalibro.destroy');

/*Create Autor*/
Route::get('consultaautor/create', [controladorAutores::class,'create'])->name('consultaautor.create');

/*Store Autor*/
Route::post('consultaautor', [controladorAutores::class,'store'])->name('consultaautor.store');

/*Index Autor*/
Route::get('consultaautor', [controladorAutores::class,'index'])->name('consultaautor.index');

/*Edit Autor*/
Route::get('consultaautor/{id}/edit', [controladorAutores::class,'edit'])->name('consultaautor.edit');

/*Update consultaautor*/
Route::put('consultaautor/{id}', [controladorAutores::class,'update'])->name('consultaautor.update');

/*Show consultaautor*/
Route::get('consultaautor/{id}/show', [controladorAutores::class,'show'])->name('consultaautor.show');

/*Delete Autor*/
Route::delete('consultaautor/{id}', [controladorAutores::class,'destroy'])->name('consultaautor.destroy');

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
Route::get('Inicio',[controladorvista::class,'showInicio']) ->name('Ini');
Route::get('Registro',[controladorvista::class,'ShowRegistro']) ->name('regis');
Route::get('formulario',[controladorvista::class,'showform'])->name('form');

Route::post('Guardarautor', [controladorvista::class,'Guardarautor'])->name('pro');
Route::post('GuardarLibro', [controladorvista::class,'GuardarLibro'])->name('proccess');

Route::get('/', function () {
    return view('welcome');
});
