<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InscripcionController;






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

Auth::routes();
Route::get('inscripciones/{inscripcion}/edit', [InscripcionController::class, 'edit'])->name('inscripciones.edit');
Route::patch('inscripciones/{inscripcion}', [InscripcionController::class, 'update'])->name('inscripciones.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('estudiantes', EstudianteController::class);
Route::resource('cursos', CursoController::class);
Route::resource('inscripciones', InscripcionController::class);

