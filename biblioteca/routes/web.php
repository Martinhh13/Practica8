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
//Index Autores
Route::get('consultaautor',[controladorAutores::class,'index'])->name('consultaautor.index');
//Create Autores
Route::get('consultaautor/create', [controladorAutores::class,'create']) ->name('consultaautor.create');
//store Autores
Route::post('consultaautor', [controladorBD::class,'store'])->name('consultaautor.store'); 

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
