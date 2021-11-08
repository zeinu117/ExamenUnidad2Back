<?php

use App\Http\Controllers\librosController;
use App\Models\libros;
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



Route::get('/', [librosController::class, 'index'])->name('libros.index');
Route::delete('libros/{libros}', [librosController::class,'destroy'])->name('libros.destroy');
Route::get('libros/{libros}/edit', [librosController::class, 'edit'])->name('libros.edit');
Route::put('libros/{libros}', [librosController::class, 'update'])->name('libros.update');
