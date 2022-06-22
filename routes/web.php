<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;

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
Auth::routes();

//ruta para mostrar la vista principal
Route::get('/', function () {
    return view('welcome');
});
//rutas del menu lateral de usuarios normal
Route::get('users', [MenuController::class, 'index'])->name('users.index')->middleware('auth');

//ruta para mostrar menu lateral de admin
Route::get('/admin', function () {
    return view('layouts.menuadmin');
})->middleware('auth');


//RUTAS PARA APARTADO DE DOCUMENTACIÓN
// Rutas para el apartado de subir documentosas
Route::get('documentos', [DocumentController::class, 'index'])->name('documentos.index')->middleware('auth');
Route::post('documentos', [DocumentController::class, 'store'])->name('documentos.store')->middleware('auth');
// Rutas para reporte y pdf de documentación
Route::get('documentos/report', [DocumentController::class, 'report'])->name('documentos.report')->middleware('auth');
Route::get('/export-pdf', [DocumentController::class, 'exportPDF'])->name('documentos.exportPDF')->middleware('auth');
//Ruta para exportar en excel
Route::get('/export-excel', [DocumentController::class, 'export'])->name('documentos.export')->middleware('auth');


//RUTAS PARA APARTADO DE EXAMENES
// Rutas de examenes test
Route::get('tests', [TestController::class, 'index'])->name('tests.index')->middleware('auth');
Route::post('tests', [TestController::class, 'store'])->name('tests.store')->middleware('auth');
Route::get('psicologico', [TestController::class, 'psicologicouno'])->name('psicologico.psicologicouno')->middleware('auth');
Route::post('altareportepsicologico', [TestController::class, 'altatest'])->name('altareportepsicologico.altatest')->middleware('auth');
Route::get('psicologicosegundo', [TestController::class, 'psicologicodos'])->name('psicologicosegundo.psicologicodos')->middleware('auth');
Route::get('psicometrico', [TestController::class, 'psicometricouno'])->name('psicometrico.psicometricouno')->middleware('auth');
Route::get('psicometricosegundo', [TestController::class, 'psicometricodos'])->name('psicometricosegundo.psicometricodos')->middleware('auth');
Route::get('estadisticas', [TestController::class, 'estadisticas'])->name('estadisticas.index')->middleware('auth');

//RUTAS PARA APARTADO DE USUARIO
//Rutas para editar informacion del usuario
Route::get('perfil/{id_usu}/edit',[UserController::class, 'edit'])->name('perfil.edit')->middleware('auth');
Route::put('perfil/{id_usu}',[UserController::class, 'update'])->name('perfil.update')->middleware('auth');
// Rutas Reporte Usuarios
Route::get('reporte', [UserController::class, 'report'])->name('reporte.report')->middleware('auth');
Route::post('reporte', [UserController::class, 'altarep'])->name('reporte.altarep')->middleware('auth');
//Rutas para cambiar contraseña del usuario (falta actualizar la contraseña)
Route::get('passreset/{id_usu}/edit',[UserController::class, 'passedit'])->name('passreset.edit')->middleware('auth');
Route::put('passreset/{id_usu}',[UserController::class, 'pasreset'])->name('passreset.update')->middleware('auth');

?>
