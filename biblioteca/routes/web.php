    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvista;

//Rutas para controlador resource

//Create
Route::get('consultaLibro/create', [controladorLibros::class,'create']) ->name('consultaLibro.create');    
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
